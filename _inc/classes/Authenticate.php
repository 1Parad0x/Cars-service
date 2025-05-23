<?php

class Authenticate
{
    private $db;

    public function __construct(Database $database)
    {
        $this->db = $database->getConnection();
    }

    public function login($email, $password)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['role'] = $user['role'];
                $_SESSION['name'] = $user['name'];
                return true;
            } else {
                echo "Nesprávne heslo.";
            }
        } else {
            echo "Používateľ s týmto emailom neexistuje.";
        }
        return false;
    }

    public function logout()
    {
        $_SESSION = array();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
            session_destroy();
        }
    }
    public function isLoggedIn()
    {
        return isset($_SESSION['user_id']);
    }
    public function getUserRole()
    {
        return $_SESSION['role'] ?? null;
    }
<<<<<<< HEAD
=======
    public function requireLogin()
    {
        if (!$this->isLoggedIn()) {
            header("Location: login.php");
            exit();
        }
    }
    public function requireAdmin()
    {
        if ($this->getUserRole() !== 'admin') {
            header("Location: index.php");
            exit();
        }
    }
>>>>>>> feb320e15915da682688d91cdc95ea011f07e3bd

}
?>