<?php

    class Conect{
        protected $connection;

        function __construct() {
            $this-> connectDadabase();
        }
        function connectDadabase(){
            try{
                $this-> connection = new PDO("mysql:host=localhost:3306;dbname=db_chd", "root", "");
            }catch(PDOException $e){
                echo 'Error! => '.$e->getMessage();
                die();
            }
        }
        
    }
    
?>