<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../../vendor/autoload.php';
require "conexion.php";

$app = new \Slim\App;
//endpoint Peliculas

// insertar
$app->post('/inspelicula', function (Request $request, Response $response, array $args) {
    //abrir la conexion
    $db=conectar();
    //obtener los datos a insertar
    $rec=$request->getQueryParams();
    $res=$db->AutoExecute("tpeliculas",$rec,"INSERT");
    //retornar el valor que indica si se ejecuto correctamente        
    $response->getBody()->write($res);
    return $response;
});
//modificar
$app->put('/updpelicula', function (Request $request, Response $response, array $args) {
    $response->getBody()->write("Modificar Pelicula");
    return $response;
});
//eliminar
$app->delete('/delpelicula/{id}', function (Request $request, Response $response, array $args) {
    $id = $args["id"];
    $response->getBody()->write("Eliminar Pelicula id: $id");
    return $response;
});

//consultas obtenr todas las peliculas
$app->get('/getpeliculas', function (Request $request, Response $response, array $args) {
    $response->getBody()->write("Get peliculas");
    return $response;
});

//consultas obtener info de una pelicula
$app->get('/getpelicula/{id}', function (Request $request, Response $response, array $args) {
    $id = $args["id"];
    $response->getBody()->write("Get pelicula id: $id");
    return $response;
});

//consultas peliculas por nombre
$app->get('/getpeliculas/{nombre}', function (Request $request, Response $response, array $args) {
    $nombre = $args["nombre"];
    $response->getBody()->write("Get peliculas  nombre: $nombre");
    return $response;
});

//Lab05-Daniel-Sibaja-Chinchilla
//---------------------CRUD Usuarios------------------------
 
//Insertar usuario

$app->post('/users/{id}', function (Request $request, Response $response, array $args) {
    $usersid = $args["id"];
    $response->getBody()->write("Insertando usuario: $usersid");
    return $response;
});
 
//Modificar usuario

$app->put('/modifyusers/{username}', function (Request $request, Response $response, array $args) {
    $username = $args["username"];
    $response->getBody()->write("Modificando usuario: $username");
    return $response;
});
 
//Eliminar usuario por id

$app->delete('/deleteusers/{id}', function (Request $request, Response $response, array $args) {
    $usersid = $args["id"];
    $response->getBody()->write("Eliminando usuario: $usersid");
    return $response;
});
 
//Iniciar sesion

$app->get('/users/{username}', function (Request $request, Response $response, array $args) {
    $username = $args["username"];
    $response->getBody()->write("Iniciando sesion como: $username");
    return $response;
});
 
//Obtener todos los usuarios 
$app->get('/users', function (Request $request, Response $response, array $args) {
    $response->getBody()->write("Get all users");
    return $response;
});
 

//Obtener los datos de usuario por id

$app->get('/usersdata/{id}', function (Request $request, Response $response, array $args) {
    $usersid = $args["id"];
    $response->getBody()->write("Obteniendo datos de: $usersid");
    return $response;
});


$app->run();
