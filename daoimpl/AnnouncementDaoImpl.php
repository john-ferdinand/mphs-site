<?php
/**
 * Created by PhpStorm.
 * User: Jordan
 * Date: 4/23/2018
 * Time: 8:09 PM
 */
include("dao/AnnouncementDao.php");
include("model/Announcement.php");

class AnnouncementDaoImpl implements AnnouncementDao{
    private $connection;

    function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    function getAllAnnouncementByMostRecent()
    {
        try{
            $SQL = "CALL getAllAnnouncementByMostRecent()";
            $spGetAnnouncements = $this->connection->prepare($SQL);
            $spGetAnnouncements->execute();
            $resultSet = $spGetAnnouncements->fetchAll(PDO::FETCH_ASSOC);

            $announcementList = [];
            foreach($resultSet as $row){
                $announcement = new Announcement();
                $announcement->setId($row['announcement_id']);
                $announcement->setTitle($row['announcement_title']);
                $announcement->setContent($row['announcement_content']);
                $announcement->setDateAdded($row['date_added']);
                $announcementList[] = $announcement;
            }

            return $announcementList;
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }


} 