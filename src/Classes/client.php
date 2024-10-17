<?php 
    include_once "person.php";
    
    class Client extends Person{

        public static $type = "Client";

        public function __construct(
            public $name,
            public $email,
            public $phone,
            public $password = null
        ){}


        public function infoPerson(){
            return 
                "<h3>" . self::$type . "-" . parent::$type ."</h3>" .
                
                "Name: "        . $this->name   .
                "<br> Phone: "  . $this->phone .
                "<br> E-mail: " . $this->email  ;
        }
    }