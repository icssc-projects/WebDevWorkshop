<?php

class dbObject {
    
    var $host = 'mysql.appjam.roboteater.com';
    var $username = 'icssc_workshop';
    var $password = 'coolcoolcool';
    var $schema = 'webdev_workshop';
    
    /*
     connect connects to a database; the instance variables of the
     database class must be initialized
    */
    public function connect() {
        mysql_connect($this->host,$this->username,$this->password)
            or die("Could not connect. " . mysql_error());
        mysql_select_db($this->schema)
            or die("Could not select database. " . mysql_error());
    }
    
   
    public function getPostById($id) {
        //select the post from the database by its id
        $sql = "SELECT * FROM blogs WHERE id=$id";
        $result = mysql_query($sql);
        $row = mysql_fetch_array($result);
        
        //create a post object to return
        $p = new Post;
        $p->id = stripslashes($row['id']);
        $p->title = stripslashes($row['title']);
        $p->userid = stripslashes($row['userid']);
        $p->date = stripslashes($row['date']);
        $p->content = stripslashes($row['content']);

        return $p; 
    }
    public function getPostByOwner($owner, $num) {
        //select the posts
        $sql = "SELECT * FROM blogs WHERE userid=$owner ORDER BY date DESC LIMIT $num";
        $result = mysql_query($sql);
        $pArray =  array();
        
        //create a posts object to return
        while($row = mysql_fetch_array($result)) {
            $p = new Post;
			$p->id = stripslashes($row['id']);
			$p->title = stripslashes($row['title']);
			$p->userid = stripslashes($row['userid']);
			$p->date = stripslashes($row['date']);
			$p->content = stripslashes($row['content']);
            array_push($pArray, $p);
        }
        return $pArray;    
    }
    public function getAllPosts($num) {
        //select the posts
        $sql = "SELECT * FROM blogs ORDER BY date DESC LIMIT $num";
        $result = mysql_query($sql);
        $pArray =  array();
        
        //create a posts object to return
        while($row = mysql_fetch_array($result)) {
            $p = new Post;
			$p->id = stripslashes($row['id']);
			$p->title = stripslashes($row['title']);
			$p->userid = stripslashes($row['userid']);
			$p->date = stripslashes($row['date']);
			$p->content = stripslashes($row['content']);
            array_push($pArray, $p);
        }
        return $pArray;    
    }
    
}

class Post {
    var $id;
    var $title;
    var $userid;
    var $date;
    var $content;
}

?>