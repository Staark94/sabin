<?php


namespace SSYT\Support;

class Database
{
    public $dbh;
    protected $dsn = 'mysql:dbname=sabin;host=127.0.0.1';
    protected $user = 'root';
    protected $password = 'loveme22@@';

    public function __construct()
    {
        try{
            $this->dbh = new \PDO($this->dsn, $this->user, $this->password);
            $this->dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            return $this->dbh;
        } catch(\PDOException $ex){
            echo 'Échec lors de la connexion : ' . $ex->getMessage();
        }
    }
}