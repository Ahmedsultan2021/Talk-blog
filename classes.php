<?php


class users{
    public $id;
    protected $password;
    public $name;
    public $role;
    public $email;

    static function login($email,$password)
    {
            $user=null;
            $qry= "select * from users where email='$email' and password ='$password'";
            require_once("config.php");
            $cn =mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
            // echo mysqli_error($cn);
            $rslt =mysqli_query($cn,$qry);
            // var_dump($rslt);
            if ($arr = mysqli_fetch_assoc($rslt)) 
            {
                // var_dump($arr);
                switch ($arr["role"]) {
                    case 'user':
                        $user =new user($arr["name"],$arr["Email"]);
                        $user->id=$arr["id"];
                        break;
                    case 'admin':
                        $user =new admin($arr["name"],$arr["Email"]);
                        $user->id=$arr["id"];
                        break;    
                  
                }
            }
            mysqli_close($cn);
            return $user;
    }
}
class user extends users 
{
    function __construct($name,$email)
    {
     $this->name = $name;   
     $this->email = $email;
     $this->role = "user";   
    }
    public function Createpost($title,$body,$file_name,$user_id)
    {
        $qry="INSERT INTO `posts` (`title`,`body`,`image`,`users_id`) VALUES('$title','$body','$file_name','$user_id')";
        require_once("config.php");
        $cn =mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
        $rslt = mysqli_query($cn,$qry);
        mysqli_close($cn);
        // echo mysqli_error($cn);
        // var_dump($rslt);
        return $rslt;
    }
    public function showposts()
    {
        $qry="select p.id, title, body, image, status, p.users_id, creaded_at, u.name from blog.posts p join blog.users u on (u.id = p.users_id) order by creaded_at desc";
        require_once("config.php");
        $cn =mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
        $rslt = mysqli_query($cn,$qry);
        $data = mysqli_fetch_all($rslt,MYSQLI_ASSOC);           
        mysqli_close($cn);
        // echo mysqli_error($cn);
        // var_dump($rslt);
        return $data;
    }
    public function deletepost($id)
    {
        $qry = "DELETE FROM posts where id = $id";
        require_once("config.php");
        $cn = mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
        $rslt= mysqli_query($cn,$qry);
        mysqli_close($cn);
        return $rslt;
    }
    public function show_all_comments()
    {
        $qry = "select c.id, comment, post_id, c.user_id, c.ceated_at, u.name from blog.comments c join blog.users u on (u.id = c.user_id) order by ceated_at desc";
        require_once("config.php");
        $cn = mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
        $rslt= mysqli_query($cn,$qry);
        $data = mysqli_fetch_all($rslt,MYSQLI_ASSOC);
        mysqli_close($cn);
        return $data;
    }
    public function addcomment($user_id,$post_id,$comment)
    {
        $qry="INSERT INTO `comments` (`post_id`, `user_id`,`comment`) VALUES ('$post_id', '$user_id','$comment');";
        require_once("config.php");
        $cn =mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
        $rslt = mysqli_query($cn,$qry);
        mysqli_close($cn);
        // echo mysqli_error($cn);
        // var_dump($rslt);     $post_id,$title,$body,$user_id
        return $rslt;
    }
    public function updatepost($id,$newtitle,$newbody)
    {
        //UPDATE `posts` SET `title` = 'sss' WHERE `posts`.`id` = 19;
        // $qry2 ="INSERT INTO `posts` ( `title`, `body`, `status`, `users_id`, `creaded_at`, `action_by`) VALUES ( 'ffff', 'ffff', 'pending', '31', current_timestamp(), NULL)";
        // $qry = "UPDATE `posts` SET `body` = `$newbody`, `title`= `$newtitle` WHERE id = `$post_id`";
           $qry2 = "UPDATE `posts` SET `title` = '$newtitle', `body` = '$newbody' where id = $id";
        require_once("config.php");
        $cn = mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
        $rslt= mysqli_query($cn,$qry2);
        mysqli_close($cn);
        return $rslt;
    }
   

    
}
class admin extends users 
{
    function __construct($name,$email)
    {
        $this->name = $name;   
        $this->email = $email;
        $this->role = "admin";   
    }
    public function delete_user($id)
    {
        $qry="DELETE FROM `order` WHERE `order`.`id` = $id;";
        require_once("config.php");
        $cn = mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
        $rslt = mysqli_query($cn,$qry);
        mysqli_close($cn);
        return $rslt;
    }
   
    public function show_all_users()
    {
        $qry = "SELECT * FROM `users`";
        require_once("config.php");
        $cn = mysqli_connect(DB_HOST,DB_USER_NAME,DB_USER_PW,DB_NAME);
        $rslt= mysqli_query($cn,$qry);
        $data = mysqli_fetch_all($rslt,MYSQLI_ASSOC);
        mysqli_close($cn);
        return $data;
    }
    

    
}


