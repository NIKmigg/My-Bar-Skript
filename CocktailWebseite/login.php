<?php
    session_start();
    include("DBconnect.php");

    $email = $_POST['email'];
    $passwort = $_POST['psw'];

    $statement = $pdo->prepare("SELECT * from nutzerdaten WHERE Email = :email");
    $result = $statement->execute(array('email' => $email));
    $user = $statement->fetch();

    if($user !== false && $passwort == $user['Passwort'])
    {
        $_SESSION['nutzerID'] = $user['NutzerID'];
        $_SESSION['name'] = $user['Name'];
        $_SESSION['email'] = $user['Email'];
        $_SESSION['passwort'] = $user['Passwort'];
        echo "Korrekt";
        
    }    
    else
    {
        $errorMessage = "E-Mail oder Passwort ungültig!<br>";
        echo $errorMessage;
    }
?>