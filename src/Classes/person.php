<?php 
    class Person{

    // ====== Old PHP versions ========

        // public $name;
        // public $email;
        // public $password;
        
        // public function __construct($namee, $email, $password){
            //     $this->name     = $name;
            //     $this->email    = $email;
            //     $this->password = $password;
            // }

    // ====== New PHP v8.0  ========        
        /**
         * $name
         * $email
         * $password
         **/ 
        public static $type = "Person";

        public function __construct(
            public $name,
            public $email,
            public $password
        ){}

        public function infoPerson(){
            return 
                "<h3>" . self::$type ."</h3>" .
                
                "Name: "        . $this->name .
                "<br> E-mail: " . $this->email;
        }
    }