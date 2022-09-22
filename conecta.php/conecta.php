<?php

//dados para nos conectarmosnao SGBD
$dsn = 'mysql:dbname=senac;host=localhost';
$user ='roo';
$pass = '';

//conectamos ao SGBD
$bd = new PDO($dsn,$user,$pass);

var_dump($bd);
