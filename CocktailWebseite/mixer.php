<!DOCTYPE html>
<html lang="de">
    <head>
        <title>My-Bar | Mixer</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="javascript.js"></script>
    
    </head>
    <body onload="navButtons()">
        <!-- Die Überschrift, evtl ein Logo oder so -->
        <div class="logo">
            <div class="container-fluid text-center">
                <img class="bildLogo" src="images/logo2.png" alt="logo">
            </div>
        </div>

        <!-- Die Navigationsleisete -->
        <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="rezepte.php">Rezepte</a></li>
                    <li class="active"><a href="mixer.php">Mixer</a></li>
                    <li><a href="eigeneRezepte.php">Eigene Rezepte</a></li>
                </ul>
                <div id="navButtonsAnReg">
                    <div class="btn-group navbar-right">
                        <button class="btn navbar-btn" onclick="document.getElementById('id01').style.display='block'"><span class="glyphicon glyphicon-user"></span> Registrieren</button>
                        <button class="btn navbar-btn" onclick="document.getElementById('id02').style.display='block'"><span class="glyphicon glyphicon-log-in"></span> Einloggen</button>
                    </div>
                </div>
                <div id="navButtonsAb">
                    <div class="btn-group navbar-right">
                        <button class="btn navbar-btn" onclick="abmelden()"><span class="glyphicon glyphicon-log-out"></span> Ausloggen</button>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Der Hauptkontent -->
        <div class="container">       
            <div class="page-header">
                <h1>Mixer</h1>
            </div>
            <div class="col-sm-12">
                <p>
                    Hier kannst du deine eigenen Rezepte erstellen!<br>
                    Die erstellten Rezepte findest du bei Eigene Rezepte ...
                </p>

                <div>
                    Menge: <input type="text" id="textFieldMenge" placeholder="z.B. 2 cl">
                    Zutat: <input type="text" onkeyup="showZutat(this.value)" id="textFieldZutat" placeholder="z.B. Zitronensaft">
                    <div class="vorschlag">
                        <h4>Vorschläge:</h4>
                        <span id="txtHint"></span>
                    </div>  
                    <button type="button" class="sucheButton" onclick="zutatHinzufuegen()"><span>Hinzufügen</span></button>
                    
                    <div id="mixer">
                        <img class="shaker" src="images/shaker.png" alt="shaker">
                        <div id="zutat1"></div>
                        <div id="zutat2"></div>
                        <div id="zutat3"></div>
                        <div id="zutat4"></div>
                        <div id="zutat5"></div>
                        <div id="zutat6"></div>
                        <div id="zutat7"></div>
                        <div id="zutat8"></div>
                        <div id="zutat9"></div>
                        <div id="zutat10"></div>
                    </div>
                    
                    <button type="button" class="sucheButton" onclick="mixerLeeren()"><span>Leeren</span></button>
                    <br>
                    Name:<br> <input type="text" id="textFieldName" placeholder="z.B. Touchdown">
                    <br>
                    Anleitung:<br> <input type="text" id="textFieldAnleitung" placeholder="z.B. Fülle 2 cl Vodka mit Eiswürfel ...">
                    <br>
                    <!-- Bild: -->
                    <button type="submit" class="sucheButton" onclick="rezeptSpeichern()"><span>Speichern</span></button>
                </div>
            </div>
        </div>

        <!-- Registrieren -->
        <div id="id01" class="modalRegAnm">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Schließen">&times;</span>
            <form class="modalRegAnm-content" method="POST" action="registrieren.php">
              <div class="reg-container">
                <h1>Registrieren</h1>
                <p>Bitte geben Sie Ihre Daten an!</p>
                <hr>
                <label for="name"><b>Name</b></label>
                <input type="text" placeholder="Enter Name" name="name" required>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>
          
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
          
                <label for="psw-repeat"><b>Passwort wiederholen</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
          
                <div class="clearfix">
                  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Abbrechen</button>
                  <button type="submit" class="signupbtn">Registrieren</button>
                </div>
              </div>
            </form>
        </div>
        
        <!-- Anmelden -->
        <div id="id02" class="modalRegAnm">    
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Schließen">&times;</span>
            <form class="modalRegAnm-content" method="POST" action="login.php">
                <div class="anm-container">
                    <h1>Anmelden</h1>
                    <p>Bitte geben Sie Ihre Daten an!</p>
                    <hr>
                    <label for="uname"><b>Benutzername</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required>
              
                    <label for="psw"><b>Passwort</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>
                 
                    <div class="clearfix">
                        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Abbrechen</button>
                        <button type="submit" class="signupbtn">Einloggen</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Die Footer -->
        <footer class="container-fluid text-center">
            <div class="footerOrdner">
                <div class="col-sm-6">
                    <table class="footerTabelle">
                        <tr>
                            <td><h3>Kontakt</h3></td>
                        </tr>
                        <tr>   
                            <td><a>Jennifer Meißner<br>Niklas Miggenrieder</a></td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-6">
                    <table class="footerTabelle">
                        <tr>
                            <td><h3>Hilfe</h3></td>
                        </tr>
                        <tr>   
                            <td><a>Bei Fragen oder Problemen,<br>wende dich bitte an die Entwickler<br>www.miggenriederniklas@dv-schulen.de</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </footer>
    </body>
</html>