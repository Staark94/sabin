<?php


namespace SSYT\Models;
use SSYT\Support\Database;

class User extends Database
{
    public $dbh;

    public function addPlayer($data = [])
    {
        if(is_array($data) && !empty($data))
        {
            $dataResult = $this->dbh->prepare("INSERT INTO `lista_codati`(`jucator`,`steamid`,`admin`,`motiv`,`durata`) VALUES (?, ?, ?, ?, ?)");
            $dataResult->execute(array(
                $data['post']['player'],
                $data['post']['steamid'],
                $data['post']['admin'],
                $data['post']['reason'],
                $data['post']['time'],
            ));

            header("Location: index.php?sid=" . session_id());
        }
    }

    public function removePlayer($id)
    {
        $q = $this->dbh->prepare("DELETE FROM lista_codati WHERE id = ?");
        if($q->execute(array($id))) {
            //die(print_r($q));
            header("Location: index.php?sid=" . session_id());
        }
    }
}