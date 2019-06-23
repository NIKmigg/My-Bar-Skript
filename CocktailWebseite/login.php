<?php
    session_start();
    include("DBconnect.php");

    $email = $_POST['email'];
    $passwort = $_POST['psw'];
    $vorherigeSeite = $_POST['seite'];

    $statement = $pdo->prepare("SELECT * from nutzerdaten WHERE Email = :email");
    $result = $statement->execute(array('email' => $email));
    $user = $statement->fetch();

    if($user !== false && $passwort == $user['Passwort'])
    {
        $_SESSION['nutzerID'] = $user['NutzerID'];
        $_SESSION['name'] = $user['Name'];
        $_SESSION['email'] = $user['Email'];
        $_SESSION['passwort'] = $user['Passwort'];
        
        header("location:" . $vorherigeSeite); 
    }    
    else
    {
        sleep(5);
        header("location:" . $vorherigeSeite); 

        $errorMessage = "E-Mail oder Passwort ungültig!<br>";
        echo $errorMessage;    
    }

    //Cookie setzen
    setcookie("user", $_SESSION['name'], time() + (3600*24), "/");
?>