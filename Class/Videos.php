<?php 

class Video extends Connection 
{
    PUBLIC $upload = NULL;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function upload_video ()
    {
        $name = $_FILES['file']['name'];
        $brand = $_POST['brand'];
        $tmp = $_FILES['file']['tmp_name'];
    
        move_uploaded_file($tmp,$name);

        $sql = "INSERT INTO video VALUES (NULL,?,?)";
        $query = $this->db->prepare($sql);
        $query->execute([$name,$brand]);

        if ($query) {
            $this->upload = true;
        }
    }
    
    public function show_video($table)
    {
        $sql = "SELECT brand FROM {$table}";        
        $query = $this->db->prepare($sql);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_OBJ);  
        // var_dump($result);
        return $result;
    }

    public function play_video($table)
    {
        $sql = "SELECT * FROM {$table}";
        $query = $this->db->prepare($sql);
        $query->execute();
      
        $show_video = $query->fetchall(PDO::FETCH_OBJ);
        // var_dump($show_video);
        return $show_video;
    }
    public function watch_video($table)
    {
        $id = $_GET['id'];

        $sql = "SELECT name FROM {$table} WHERE id=$id";
        $query = $this->db->prepare($sql);
        $query->execute([$id]);
      
        $show_video = $query->fetch(PDO::FETCH_OBJ);
        // var_dump($show_video);
        return $show_video;
    }
    public function watch_laravel()
    {
        $id = $_GET['laravel_id'];

        $sql = "SELECT name FROM laravel WHERE id=$id";
        $query = $this->db->prepare($sql);
        $query->execute([$id]);
      
        $laravel_show_video = $query->fetch(PDO::FETCH_OBJ);
        // var_dump($show_video);
        return $laravel_show_video;
    }
}


?>