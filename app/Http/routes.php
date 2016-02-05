<?php

$app->get('/', function (){
    return view('home');
});


$app->get('/worlds' , ['uses' => 'WorldsController@all']);
$app->get('/world/{world_name}' , ['uses' => 'WorldsController@world']);
$app->get('/character/{character_name}' , ['uses' => 'CharactersController@search']);
$app->get('/guild/{guild_name}' , ['uses' => 'GuildsController@search']);
