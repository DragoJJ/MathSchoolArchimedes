<?php

const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASSWORD = 'root';
const DB_NAME = 'math_school_archimedes';

function getDBConnection()
{
    return mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
        or die("Cannot connect to the server !");
}
