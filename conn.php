<?php
    class mydb
    {
        public $host = "localhost";
        public $username = "root";
        public $password = "";
        public $dbname = "db_comment_system";
        public $run;

        public function __construct()
        { 
            $this->run = new mysqli($this->host, $this->username, $this->password, $this->dbname);
            if(mysqli_connect_errno())
            {
                die("Database Connection Error !!");
                exit;
            }
        }
    }
    
    $obj=new mydb;
?>