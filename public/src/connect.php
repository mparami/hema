<?php
// HEMA Database Connection
try {
    $hemadb = new PDO("mysql:host=localhost;dbname=hema", "root", "");
} catch (PDOException $e) {
    die('Error!: '.$e->getMessage());
}