<?php
/**
 * Created by PhpStorm.
 * User: Jordan
 * Date: 4/23/2018
 * Time: 1:22 PM
 */
include ("dao/LoginDao.php");


class LoginDaoImpl implements LoginDao{

    private $connection;

    function __construct(\PDO $pdo)
    {
        $this->connection = $pdo;
    }

    function isValid(User $user)
    {
        $isValid = 0;

        try{
            $SQL = "CALL isLoginValid(?,?)";
            $spIsLoginValid = $this->connection->prepare($SQL);
            $spIsLoginValid->bindParam(1,$user->getUsername(),PDO::PARAM_STR);
            $spIsLoginValid->bindParam(2,$user->getPassword(),PDO::PARAM_STR);
            $spIsLoginValid->execute();


            $resultSet = $spIsLoginValid->fetchAll(PDO::FETCH_ASSOC);
            foreach($resultSet as $row){
                $isValid = $row['isValid'];
            }

            $spIsLoginValid->closeCursor();
        }catch (PDOException $e){
            die($e->getMessage());
        }

        return $isValid;
    }


}