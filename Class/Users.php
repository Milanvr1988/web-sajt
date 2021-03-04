<?php 

class User extends Connection 
{

    public $kontakt_message = NULL;
    public $login = NULL;
    public $register = NULL;
    
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function view_message()
    {
        $sql = "SELECT * FROM email";
        $query = $this->db->prepare($sql);
        $query->execute();
        $todos = $query->fetchall(PDO::FETCH_OBJ); 

        return $todos;
        // echo "<pre>";
        // var_dump($todos);
        // echo "</pre>";
    }
    public function contact_me()
    {
        $name = $_POST['ime'];
        $email = $_POST['email'];
        $password = $_POST['poruka'];

        $sql = "INSERT INTO email VALUES (NULL,?,?,?)";
        $query = $this->db->prepare($sql);
        $query->execute([$name,$email,$password]);

        if ($query) {
            $this->kontakt_message = true;
        }
        // return $query;
        // var_dump($query);

    }
    public function register()
    {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO sajt VALUES (NULL,?,?,?,?)";
        $query = $this->db->prepare($sql);
        $query->execute([$name,$username,$email,$password]);
        // var_dump($query);
        if ($query) {
            $this->register = true;
        }
        // if ($query) {
        //     header('location:view/view.login.php');
        // }else {
        //     header('location:view/view.register.php');
        // }
    }
    public function login()
    {
        $email = $_POST['login_email'];
        $password = $_POST['login_password'];

        $sql = "SELECT * FROM sajt WHERE email = ? AND password = ?";
        $query = $this->db->prepare($sql);
        $query->execute([$email,$password]);
        $login = $query->fetch(PDO::FETCH_OBJ);
        // var_dump($log);
        if ($login) {
            $_SESSION['logged_user'] = $login;
        }
        if (!$login) {
            $this->login = true;
        }

        if ($login) {
            header('location:index.php');
        }
    } 
}
?>