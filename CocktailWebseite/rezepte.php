<!DOCTYPE html>
<html lang="de">
    <head>
        <title>My-Bar | Rezepte</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <!-- Die Überschrift, evtl ein Logo oder so -->
        <div class="logo">
            <div class="container-fluid text-center">
                <img src="logo2.png" alt="logo">
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
                    <li class="active"><a href="rezepte.php">Rezepte</a></li>
                    <li><a href="mixer.php">Mixer</a></li>
                    <li><a href="eigeneRezepte.php">Eigene Rezepte</a></li>
                </ul>
                <div class="btn-group navbar-right">
                    <button class="btn navbar-btn" onclick="document.getElementById('id01').style.display='block'"><span class="glyphicon glyphicon-user"></span> Registrieren</button>
                    <button class="btn navbar-btn" onclick="document.getElementById('id02').style.display='block'"><span class="glyphicon glyphicon-log-in"></span> Einloggen</button>
                </div>
            </div>
        </nav>

        <!-- Der Hauptkontent -->
        <div class="container">       
            <div class="page-header">
                <h1>Rezepte</h1>
            </div>
            <div id="sucheButtonsDiv">
                <button class="sucheButton aktiv" onclick="filterAuswahl('alle')">Alle</button>
                <button class="sucheButton" onclick="filterAuswahl('longdrink')">Longdrinks</button>
                <button class="sucheButton" onclick="filterAuswahl('cocktail')">Cocktails</button>
                <button class="sucheButton" onclick="filterAuswahl('shot')">Shots</button>
            </div>
            <div class="col-sm-12">
                
                <div class="flip-box longdrink">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <h2>Vodka Lemon</h2>
                        </div>
                        <div class="flip-box-back">
                            <ul class="ulRezept">
                                <li><a>test</a></li>
                                <li><a>test2</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flip-box cocktail">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <h2>Vodka Lemon Mango</h2>
                        </div>
                        <div class="flip-box-back">
                            <ul class="ulRezept">
                                <li><a>test</a></li>
                                <li><a>test2</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flip-box shot">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <h2>Vodka</h2>
                        </div>
                        <div class="flip-box-back">
                            <ul class="ulRezept">
                                <li><a>test</a></li>
                                <li><a>test2</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>

        <!-- Registrieren -->
        <div id="id01" class="modalRegAnm">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Schließen">&times;</span>
            <form class="modalRegAnm-content">
              <div class="reg-container">
                <h1>Registrieren</h1>
                <p>Bitte geben Sie Ihre Daten an!</p>
                <hr>
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
            <div class="upper">
                <p>Footer Text</p>
            </div>
        </footer>
        
        <script>
            var modal1 = document.getElementById('id01');
            var modal2 = document.getElementById('id02');
            
            // Schließen beim klicken außerhalb der Box
            window.onclick = function(event) 
            {
                if (event.target == modal1) 
                {
                    modal1.style.display = "none";
                }
                else if (event.target == modal2) 
                {
                    modal2.style.display = "none";
                }
            }

            // Filtern von Div-Klassen per Buttons
            filterAuswahl("alle")

            function filterAuswahl(auswahl)
            {
                var x, i;
                x = document.getElementsByClassName("flip-box");

                if(auswahl == "alle")
                {
                    auswahl = "";
                }

                for(i = 0; i < x.length; i++)
                {
                    entfernenKlasse(x[i], "show");

                    if(x[i].className.indexOf(auswahl) > -1)
                    {
                        hinzufuegenKlasse(x[i], "show");
                    }
                }
            }

            function hinzufuegenKlasse(element, name)
            {
                var i, array1, array2;
                array1 = element.className.split(" ");
                array2 = name.split(" ");

                for(i = 0; i < array2.length; i++)
                {
                    if(array1.indexOf(array2[i]) == -1)
                    {
                        element.className += " " + array2[i];
                    }
                }
            }

            function entfernenKlasse(element, name)
            {
                var i, array1, array2;
                array1 = element.className.split(" ");
                array2 = name.split(" ");

                for(i = 0; i < array2.length; i++)
                {
                    while(array1.indexOf(array2[i]) > -1)
                    {
                        array1.splice(array1.indexOf(array2[i]), 1);
                    }
                }
                element.className = array1.join(" ");
            }

            var sucheButtonsDiv = document.getElementById("sucheButtonsDiv");
            var buttons = sucheButtonsDiv.getElementsByClassName("sucheButton");
            var i, ausgewaehlt;

            for(var i = 0; i < buttons.length; i++)
            {
                buttons[i].addEventListener("click", function()
                    {
                        ausgewaehlt = document.getElementsByClassName("aktiv");
                        ausgewaehlt[0].className = ausgewaehlt[0].className.replace(" aktiv", "");
                        this.className += " aktiv";
                    }
                );
            }
        </script>
    </body>
</html>