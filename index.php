<?php
    require_once "src/Classes/user.php";
    require_once "src/Classes/client.php";

    $person1 = new Person('Antonio', 'anavia.finanzas@gmail.com', 'Contraseña123');
    $user1 = new User('Antonio', 'Admin', 'anavia.finanzas@gmail.com', 'Contraseña123');
    $client1 = new Client(name:'Antonio', phone: 5512312380, email:'anavia.finanzas@gmail.com', password:'Contraseña123');
    $client2 = new Client(name:'Andrea', phone: 5510001000, email:'andiandiram@gmail.com', password:'123aAaA');

    echo $person1->infoPerson();
    echo "<hr>"; 
    echo $user1->infoPerson();
    echo "<hr>";
    echo $client1->infoPerson();
    echo "<hr>";
    echo $client2->infoPerson();
    echo "<hr>";