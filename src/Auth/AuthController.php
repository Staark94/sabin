<?php


namespace SSYT\Auth;
use SSYT\Support\Database;

class AuthController extends Database
{
    public $dbh;

    public function getAdmin()
    {
        if(isset($_SESSION['user']))
        {
            $q = $this->dbh
                ->prepare("SELECT * FROM sabin.accounts WHERE id = ? LIMIT 0,1");
            $q->execute(array($_SESSION['user']['id']));
            $data = $q->fetch(\PDO::FETCH_OBJ);

            if($data->rank == 1) return true;
        }

        return false;
    }

    public function login($user, $pass)
    {
        if(isset($_SESSION['user'])) {
            return false;
        }

        $q = $this->dbh
            ->prepare("SELECT * FROM sabin.accounts WHERE email = ? LIMIT 0,1");
        $q->execute(array($user));

        if($q->rowCount() > 0)
        {
            $result = $q->fetch(\PDO::FETCH_OBJ);
            return (password_verify($pass, $result->password))
                ? $this->loginUser($result->id, $result->rank)
                : header("Location: /index.php?method=login&error=failed");
        } else {
            header("Location: /index.php?method=login&error=failed");
        }
    }

    public function loginUser($id, $rank)
    {
        if(isset($_SESSION['user'])) return false;

        $_SESSION['user'] = array(
            'id' => $id,
            'rank' => $rank
        );

        header("Location: index.php?sid=" . session_id());
    }

    public function logout()
    {
        if(isset($_SESSION['user']))
        {
            $_SESSION = array();
            header("Location: index.php");
        }
    }
}