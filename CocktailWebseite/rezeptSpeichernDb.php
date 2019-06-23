<?php
    session_start();
    include("DBconnect.php");

    $nutzer = $_SESSION['name'];
    $bezeichnung = $_POST['bezeichnung'];
    $anleitung = $_POST['anleitung'];
    $zutat1 = $_POST['zutat1'];
    $zutat2 = $_POST['zutat2'];
    $zutat3 = $_POST['zutat3'];
    $zutat4 = $_POST['zutat4'];
    $zutat5 = $_POST['zutat5'];
    $zutat6 = $_POST['zutat6'];
    $zutat7 = $_POST['zutat7'];
    $zutat8 = $_POST['zutat8'];
    $zutat9 = $_POST['zutat9'];
    $zutat10 = $_POST['zutat10'];
    $bild = $_POST['bild'];

    $statement = $pdo->prepare("INSERT INTO eigenesrezept (user, bezeichnung, anleitung, zutat1, zutat2, zutat3, zutat4, zutat5, zutat6, zutat7, zutat8, zutat9, zutat10, bild) 
                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $statement->execute(array($nutzer, $bezeichnung, $anleitung, $zutat1, $zutat2, $zutat3, $zutat4, $zutat5, $zutat6, $zutat7, $zutat8, $zutat9, $zutat10, $bild));
?>