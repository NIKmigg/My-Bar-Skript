<?php
    session_start();
    include("DBconnect.php");

    $email = $_POST['email'];
    $passwort = $_POST['psw'];
    $name = $_POST['name'];
    $passwortrepeat = $_POST['psw-repeat'];

    if(strcmp($passwort, $passwortrepeat) == 0)
    {
        $statement = $pdo->prepare("SELECT * from nutzerdaten WHERE Email = :email");
        $result = $statement->execute(array('email' => $email));
        $user = $statement->fetch();

        if(strcmp($user['Email'], $email) != 0)
        {
            $statement2 = $pdo->prepare("INSERT INTO nutzerdaten (Name, Email, Passwort) VALUES(?, ?, ?)");
            $statement2->execute(array($name, $email, $passwort));
            header("location:home.php");          
        }
        else
        {
            echo "Email bereits vohanden!";
        }
    }
    else
    {
        echo "Passwörter stimmen nicht überein!";
    }
?>