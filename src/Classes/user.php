<?php 
    include_once "person.php";
    
    class User extends Person{

        public static $type = "User";

        public function __construct(
            public $name,
            public $puesto,
            public $email,
            public $password
        ){}

        public function infoPerson(){
            return 
                "<h3>". self::$type . "-" . parent::$type ."</h3>".

                "Name: "              . $this->name   .
                "<br> Job Position: " . $this->puesto .
                "<br> Correo: "       . $this->email  ;
        }
    }