<?php


$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
    ['name' => 'Mario' , 'surname' => 'Rossi' , 'gender' => 'M'],
    ['name' => 'Lucia' , 'surname' => 'Verdi' , 'gender' => 'F'],
    ];

    foreach ($users as $user){
        if($user['gender']=='M'){
            echo "Buongiorno Sig." . $user['name'] . " " . $user['surname'] . "\n";
        }elseif($user['gender']=='F'){
            echo "Buongirono Sig.ra" . $user['name'] . " " . $user['surname'] . "\n";
        }else{
            echo "Buongiorno". $user['name'] . " " . $user['surname'] . "\n";
        }
    }
