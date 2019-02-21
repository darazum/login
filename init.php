<?php
session_start();

require_once 'functions.php';

/**
 * @return PDO
 */
function getDbConnection(): PDO
{
    static $DB;
    if (!$DB) {
        try {
            $DB = new PDO('mysql:dbname=test;host=127.0.0.1', 'root', 'root');
        } catch (Exception $e) {
            die('error: ' . $e->getMessage());
        }
    }

    return $DB;
}


