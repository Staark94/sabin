<?php


namespace SSYT\Models;
use SSYT\Support\Database;

class PlayerList extends Database
{
    public $dbh;
    protected $table = "lista_codati";

    /**
     * PlayerList render.
     * @param $dbh
     */

    public function render()
    {
        $result = $this->dbh->prepare("SELECT * FROM `lista_codati` LIMIT 0, 10");
        $result->execute();

        return $result->fetchAll(\PDO::FETCH_OBJ);
    }

    public function addPlayer(array $data)
    {

    }

    public function deletePlayer($id) {

    }
}