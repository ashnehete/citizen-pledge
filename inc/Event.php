<?php

/**
 * Created by PhpStorm.
 * User: Aashish Nehete
 * Date: 04-Dec-16
 * Time: 20:57
 */
class Event
{
    private $_db;

    public function __construct($db = NULL)
    {
        if (is_object($db))
            $this->_db = $db;
        else {
            $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
            $this->_db = new PDO($dsn, DB_USER, DB_PASS);
        }
    }

    public function createEvent($ngo_id, $location, $start_time, $end_time)
    {
        $sql = 'INSERT INTO events (ngo_id, location, start_time, end_time) VALUES (:ngo_id, :location, :start_time, :end_time)';
        if ($stmt = $this->_db->prepare($sql)) {
            $stmt->bindParam('ngo_id', $ngo_id, PDO::PARAM_INT);
            $stmt->bindParam('location', $location, PDO::PARAM_STR);
            $stmt->bindParam('start_time', $start_time, PDO::PARAM_STR);
            $stmt->bindParam('end_time', $end_time, PDO::PARAM_STR);
            $stmt->execute();
        }
        return 'Event inserted.';
    }

    /**
     * @param int $limit number of events per page
     * @return int number of pages required
     */
    public function getNumberOfPages($limit = 20)
    {
        $sql = 'SELECT COUNT(id) FROM events';
        if ($stmt = $this->_db->prepare($sql)) {
            $stmt->execute();
            $row = $stmt->fetch();
            return ceil($row[0] / $limit);
        }
        return 0;
    }

    public function getAllEvents($page = 1, $limit = 20)
    {
        $offset = $limit * ($page - 1);
        $sql = 'SELECT events.*, users.name, users.username FROM events JOIN users' .
            ' ON events.ngo_id = users.id LIMIT :offset, :limit';
        if ($stmt = $this->_db->prepare($sql)) {
            $stmt->bindParam('offset', $offset, PDO::PARAM_INT);
            $stmt->bindParam('limit', $limit, PDO::PARAM_INT);
            $stmt->execute();
            $rows = $stmt->fetchAll();
            return $rows;
        }
    }

    public function getEventById($id)
    {
        $sql = 'SELECT events.*, users.name, users.username FROM events JOIN users' .
            ' ON events.ngo_id = users.id WHERE events.id = :id';
        if ($stmt = $this->_db->prepare($sql)) {
            $stmt->bindParam('id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $row = $stmt->fetch();
            return $row;
        }
    }

    public function getEventsByTag($id)
    {

    }

    public function getEventsByNgo($user_id, $limit = NULL)
    {
        $sql = 'SELECT * WHERE ngo_id = :user_id';

        if (!is_null($limit))
            $sql .= ' LIMIT :limit';

        if ($stmt = $this->_db->prepare($sql)) {
            $stmt->bindParam('user_id', $user_id, PDO::PARAM_INT);

            if (!is_null($limit))
                $stmt->bindParam('limit', $limit, PDO::PARAM_INT);

            $stmt->execute();
            $row = $stmt->fetch();
            return $row;
        }
    }

    public function pledgeToEvent($user_id, $event_id)
    {
        if ($_SESSION[USER_TYPE_ID] === NGO)
            return 'NGOs cannot pledge to events.';

        $sql = 'SELECT id FROM citizen_event WHERE citizen_id = :user_id AND event_id = :event_id';
        if ($stmt = $this->_db->prepare($sql)) {
            $stmt->bindParam('user_id', $user_id, PDO::PARAM_INT);
            $stmt->bindParam('event_id', $event_id, PDO::PARAM_INT);
            $stmt->execute();
            if ($stmt->rowCount() != 0)
                return 'You have already pledged to this event.';
        }
        $sql = 'INSERT INTO citizen_event (citizen_id, event_id) VALUES (:user_id, :event_id)';
        if ($stmt = $this->_db->prepare($sql)) {
            $stmt->bindParam('user_id', $user_id, PDO::PARAM_INT);
            $stmt->bindParam('event_id', $event_id, PDO::PARAM_INT);
            $stmt->execute();
        }
        $sql = 'UPDATE events SET pledges = pledges + 1 WHERE id = :event_id';
        if ($stmt = $this->_db->prepare($sql)) {
            $stmt->bindParam('event_id', $event_id, PDO::PARAM_INT);
            $stmt->execute();
        }
        return 'Successfully pledged to event.';
    }
}