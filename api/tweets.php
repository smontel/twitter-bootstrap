<?php
header('access-control-allow-origin:*');
$array = array(
    array(
        "name" => "Ryhad",
        "pseudo"=> "@Gryhades_et_BBQ",
        "tweet"=> "J'ai pas linké ma librairie Angular... #KillMe",
        "img"=> "img/apple.png"
    ),
    array(
        "name"=> "Valentin",
        "pseudo"=> "@VAL_10",
        "tweet"=> "J'aurais vraiment dû faire mon exo Twitter ce week-end !",
        "img"=> "img/val_rsz.jpg"
    ),
    array(
        "name"=> "César",
        "pseudo"=> "@johnny_en_plein_doute",
        "tweet"=> "Moi je fais l'exo avec Angular 1 parce que je suis DINGUE",
        "img"=> "img/apple.png"
    ),
    array(
        "name"=> "Élise",
        "pseudo"=> "@Eliz_2_MARS",
        "tweet"=> "Refaite, avec mon casque je n'entends pas @Gryhades_et_BBQ #calme #peace",
        "img"=> "img/profile.png"
    ),
    array(
        "name"=> "Alexandradra",
        "pseudo"=> "@Alexandradra_",
        "tweet"=> "C'EST MOI LA BOSS DES ROUTEURS UI ANGULAR !!!!!",
        "img"=> "img/avatar.jpg"
    ),
    array(
        "name"=> "Okba",
        "pseudo"=> "@Okbalancetoidegaucheadroite",
        "tweet"=> "666 lol b C++",
        "img"=> "img/okba.png"
    ),
    array(
        "name"=> "Michelle Obama",
        "pseudo"=> "@MichelleObama",
        "tweet"=> ".@Alexandradra_ est une vraie source d'inspiration pour moi, elle m'a tout appris",
        "img"=> "img/french.jpeg"
    ));
$arrayjson = json_encode($array);
echo $arrayjson;
?>
