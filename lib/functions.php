<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent() {
	if(!isset($_GET['page'])){
		include __DIR__.'/../pages/home.php';
	}
	elseif(isset($_GET['page']) && $_GET['page'] === "bio") {

        include __DIR__.'/../pages/bio.php';
    }
	elseif(isset($_GET['page']) && $_GET['page'] === "contact") {

        include __DIR__.'/../pages/contact.php';
    }
}

function getPart($name) {
	include __DIR__ . '/../parts/'. $name . '.php';
}

function getUserData(){
    $data = json_decode(file_get_contents("../data/user.json"), true, 5, JSON_OBJECT_AS_ARRAY);
    foreach ($data as $key => $value){
        if ($key === "experiences"){
            foreach ($value as $otherKey => $otherValue){
                echo $otherKey.": ".$otherValue."<br>";
            }
        }
        else echo $key.": ".$value."<br>";
    }
}