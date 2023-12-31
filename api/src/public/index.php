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
    $db=conectar();
    $rec=$request->getQueryParams();
    $res=$db->AutoExecute("tpeliculas",$rec,"UPDATE","id=$rec[id]");
    $response->getBody()->write($res);    
    return $response;
});
//eliminar
$app->delete('/delpelicula/{id}', function (Request $request, Response $response, array $args) {
    $id=$args["id"];
    $db=conectar();
    $sql="DELETE FROM tpeliculas WHERE id=$id";
    $res=$db->execute($sql); //Retorna un objeto, no un booleano
    $response->getBody()->write($res);
    return $response;
});

//consultas obtenr todas las peliculas
$app->get('/getpeliculas', function (Request $request, Response $response, array $args) {
    $db=conectar();
    //definir el tipo de fetch
    $db->SetFetchMode(ADODB_FETCH_ASSOC);
    $sql="SELECT * FROM tpeliculas";
    $res=$db->GetAll($sql);
    //respuesta en formato json
    $response->getBody()->write(json_encode($res));
    return $response;
});

//consultas obtener info de una pelicula
$app->get('/getpelicula/{id}', function (Request $request, Response $response, array $args) {
    $id=$args["id"];
    $db=conectar();
    //definir el tipo de fetch
    $db->SetFetchMode(ADODB_FETCH_ASSOC);
    $sql="SELECT * FROM tpeliculas WHERE id=$id";
    $res=$db->GetAll($sql);
    //respuesta en formato json
    $response->getBody()->write(json_encode($res));
    return $response;
});

//consultas peliculas por nombre
$app->get('/getpeliculas/{nombre}', function (Request $request, Response $response, array $args) {
    $nombre=$args["nombre"];
    $db=conectar();
    //definir el tipo de fetch
    $db->SetFetchMode(ADODB_FETCH_ASSOC);
    $sql="SELECT * FROM tpeliculas where nombre LIKE '%$nombre%'";
    $res=$db->GetAll($sql);
    //respuesta en formato json
    $response->getBody()->write(json_encode($res));
});

//Lab06-Daniel-Sibaja-Chinchilla
//---------------------CRUD Usuarios------------------------
 
//Insertar usuario

$app->post('/users', function (Request $request, Response $response, array $args) {
    //abrir la conexion
    $db=conectar();
    //obtener los datos a insertar
    $rec=$request->getQueryParams();
    $res=$db->AutoExecute("usuarios",$rec,"INSERT");
    //retornar el valor que indica si se ejecuto correctamente        
    $response->getBody()->write($res);
    return $response;
});
 
//Modificar usuario
 
$app->put('/modifyusers/{id}', function (Request $request, Response $response, array $args) {
    $db=conectar();
    $rec=$request->getQueryParams();
    $res=$db->AutoExecute("usuarios",$rec,"UPDATE","id=$rec[id]");
    $response->getBody()->write($res);    
    return $response;
});

//Eliminar usuario por id

$app->delete('/deleteusers/{id}', function (Request $request, Response $response, array $args) {
    $id=$args["id"];
    $db=conectar();
    $sql="DELETE FROM usuarios WHERE id=$id";
    $res=$db->execute($sql); //Retorna un objeto, no un booleano
    $response->getBody()->write($res);
    return $response;
});
 
//Iniciar sesion

$app->get('/users/{id}/{password}', function (Request $request, Response $response, array $args) {
    $id=$args["id"];
    $password =$args["password"];
    $db=conectar();
    //definir el tipo de fetch
    $db->SetFetchMode(ADODB_FETCH_ASSOC);
    $sql="SELECT * FROM usuarios WHERE id=$id AND contrasena='$password'";
    $res=$db->GetAll($sql);
    //respuesta en formato json
    $response->getBody()->write(json_encode($res));
    return $response;
});
 
//Obtener todos los usuarios 
$app->get('/users', function (Request $request, Response $response, array $args) {
    $db=conectar();
    //definir el tipo de fetch
    $db->SetFetchMode(ADODB_FETCH_ASSOC);
    $sql="SELECT * FROM usuarios";
    $res=$db->GetAll($sql);
    //respuesta en formato json
    $response->getBody()->write(json_encode($res));
    return $response;
});

//Obtener los datos de usuario por id

$app->get('/user/{id}', function (Request $request, Response $response, array $args) {
    $id=$args["id"];
    $db=conectar();
    //definir el tipo de fetch
    $db->SetFetchMode(ADODB_FETCH_ASSOC);
    $sql="SELECT * FROM usuarios WHERE id=$id";
    $res=$db->GetAll($sql);
    //respuesta en formato json
    $response->getBody()->write(json_encode($res));
    return $response;
});


$app->run();
