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
            $row = $stmt->fetch();
            if ($row)
                return 'Event inserted.';
        }
        return SERVER_ERROR;
    }

    public function getEventById($id)
    {

    }

    public function getEventsByTag($id)
    {

    }

    public function pledgeToEvent($event_id, $user_id)
    {

    }
}