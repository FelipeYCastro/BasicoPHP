<?php

//int
$v1 = 10;
$v01 = -10;
$v001 = 0;

// float
$v2 = 10.5;

//boll
$v3 = true;
$v4 = false;

//string
$v5 = 'string';
$v6 = "string\n";

// void seria vazio ou nada

//mixed ele identifica qualquer tipo

//array
$v7 = [];
$v8 = array();

//object
$v9 = new class
{
};
$v10 = (object) [];
$v11 = new stdClass();

//gettype descobri qual o tipo de dado você quer saber
$type = gettype(10.5);
echo $type;