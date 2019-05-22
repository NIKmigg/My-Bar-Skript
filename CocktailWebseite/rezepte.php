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
                <button class="sucheButton active" onclick="filterAuswahl('alle')"><span>Alle</span></button>
                <button class="sucheButton" onclick="filterAuswahl('longdrink')"><span>Longdrinks</span></button>
                <button class="sucheButton" onclick="filterAuswahl('cocktail')"><span>Cocktails</span></button>
                <button class="sucheButton" onclick="filterAuswahl('shot')"><span>Shots</span></button>
            </div>
            <div class="col-sm-12">
                <!-- Longdrinks -->
                <div class="flip-box longdrink">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <h2>Vodka Lemon</h2>
                            <img src="images/VodkaLemon.jpg" alt="Vodka Lemon" class="rezeptImg-right">
                        </div>
                        <div class="flip-box-back">
                            <h3>Zutaten</h3>
                            <table class="zutatenTabelle">
                                <tr>
                                    <td><a> 4 cl</a></td>
                                    <td><a>Vodka</a></td>
                                </tr>
                                <tr>
                                    <td><a> 1 cl</a></td>
                                    <td><a>Limettensaft</a></td>
                                </tr>
                                <tr>
                                    <td><a> 1 Schuss</a></td>
                                    <td><a>Bitterlemon</a></td>
                                </tr>
                            </table> 
                        </div>
                    </div>
                </div>
                <div class="flip-box longdrink">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <h2>Vodka Maraquja</h2>
                            <img src="images/VodkaMaracuja.jpg" alt="Vodka Maraquja" class="rezeptImg-right">
                        </div>
                        <div class="flip-box-back">
                            <h3>Zutaten</h3>
                            <table class="zutatenTabelle">
                                <tr>
                                    <td><a> 4 cl</a></td>
                                    <td><a>Vodka</a></td>
                                </tr>
                                <tr>
                                    <td><a>12 cl</a></td>
                                    <td><a>Maracujasaft</a></td>
                                </tr>
                            </table>   
                        </div>

                    </div>
                </div>
                <div class="flip-box longdrink">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <h2>Cuba Libre</h2>
                            <img src="images/CubaLibre.jpg" alt="Cuba Libre" class="rezeptImg-right">
                        </div>
                        <div class="flip-box-back">
                            <h3>Zutaten</h3>
                            <table class="zutatenTabelle">
                                <tr>
                                    <td><a> 4 cl</a></td>
                                    <td><a>Rum (weiss)</a></td>
                                </tr>
                                <tr>
                                    <td><a>eine Hable</a></td>
                                    <td><a>Limette</a></td>
                                </tr>
                                <tr>
                                    <td><a>der Rest</a></td>
                                    <td><a>Cola</a></td>
                                </tr>
                            </table> 
                        </div>
                    </div>
                </div>
                <div class="flip-box longdrink">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <h2>Gin Tonic</h2>                   
                            <img src="images/GinTonic.jpg" alt="Gin Tonic" class="rezeptImg-right">
                        </div>
                        <div class="flip-box-back">
                            <h3>Zutaten</h3>
                            <table class="zutatenTabelle">
                                <tr>
                                    <td><a> 4 cl</a></td>
                                    <td><a>Gin</a></td>
                                </tr>
                                <tr>
                                    <td><a></a></td>
                                    <td><a>Tonic Water</a></td>
                                </tr>
                            </table> 
                        </div>
                    </div>
                </div>
                <!-- Cocktails -->
                <div class="flip-box cocktail">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <h2>Caipirinha</h2>
                            <img src="images/Caipirinha.jpg" alt="Caipirinha" class="rezeptImg-right">
                        </div>
                        <div class="flip-box-back">
                            <h3>Zutaten</h3>
                            <table class="zutatenTabelle">
                                <tr>
                                    <td><a> 1</a></td>
                                    <td><a>Limette</a></td>
                                </tr>
                                <tr>
                                    <td><a> 2 TL</a></td>
                                    <td><a>Rohrzucker</a></td>
                                </tr>
                                <tr>
                                    <td><a> 6 cl</a></td>
                                    <td><a>Cachaça</a></td>
                                </tr>
                            </table>  
                        </div>
                    </div>
                </div>
                <div class="flip-box cocktail">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <h2>Sex on the Beach</h2>
                            <img src="images/SexOnTheBeach.jpg" alt="Sex on the Beach" class="rezeptImg-right">
                        </div>
                        <div class="flip-box-back">
                            <h3>Zutaten</h3>
                            <table class="zutatenTabelle">
                                <tr>
                                    <td><a> 4 cl</a></td>
                                    <td><a>Vodka</a></td>
                                </tr>
                                <tr>
                                    <td><a> 4 cl</a></td>
                                    <td><a>Pfirsich Likör</a></td>
                                </tr>
                                <tr>
                                    <td><a> 8 cl</a></td>
                                    <td><a>Cranberrysaft/-nektar</a></td>
                                </tr>
                                <tr>
                                    <td><a> 8 cl</a></td>
                                    <td><a>Orangensaft</a></td>
                                </tr>
                            </table>  
                        </div>
                    </div>
                </div>
                <div class="flip-box cocktail">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <h2>Touch Down</h2>
                            <img src="images/TouchDown.jpg" alt="Touch Down" class="rezeptImg-right">
                        </div>
                        <div class="flip-box-back">
                            <h3>Zutaten</h3>
                            <table class="zutatenTabelle">
                                <tr>
                                    <td><a> 4 cl</a></td>
                                    <td><a>Vodka</a></td>
                                </tr>
                                <tr>
                                    <td><a> 2 cl</a></td>
                                    <td><a>Apricot Brandy</a></td>
                                </tr>
                                <tr>
                                    <td><a> 2 cl</a></td>
                                    <td><a>Orangensaft</a></td>
                                </tr>
                                <tr>
                                    <td><a> 2 cl</a></td>
                                    <td><a>Zitronensaft</a></td>
                                </tr>
                                <tr>
                                    <td><a> 6 cl</a></td>
                                    <td><a>Maracujasaft</a></td>
                                </tr>
                                <tr>
                                    <td><a> 1 cl</a></td>
                                    <td><a>Grenadine</a></td>
                                </tr>
                            </table>  
                        </div>
                    </div>
                </div>
                <div class="flip-box cocktail">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <h2>Pina Colada</h2>
                            <img src="images/PinaColada.jpg" alt="Pina Colada" class="rezeptImg-right">
                        </div>
                        <div class="flip-box-back">
                            <h3>Zutaten</h3>
                            <table class="zutatenTabelle">
                                <tr>
                                    <td><a> 4 cl</a></td>
                                    <td><a>Cream of Coconut</a></td>
                                </tr>
                                <tr>
                                    <td><a> 4 cl</a></td>
                                    <td><a>Rum (weiss)</a></td>
                                </tr>
                                <tr>
                                    <td><a> 2 cl</a></td>
                                    <td><a>Kokosmilch</a></td>
                                </tr>
                                <tr>
                                    <td><a> 2 cl</a></td>
                                    <td><a>Sahne</a></td>
                                </tr>
                                <tr>
                                    <td><a> 9 cl</a></td>
                                    <td><a>Ananassaft</a></td>
                                </tr>
                            </table>  
                        </div>
                    </div>
                </div>
                <div class="flip-box cocktail">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <h2>Mojito</h2>
                            <img src="images/Mojito.jpg" alt="Mojito" class="rezeptImg-right">
                        </div>
                        <div class="flip-box-back">
                            <h3>Zutaten</h3>
                            <table class="zutatenTabelle">
                                <tr>
                                    <td><a> 2 BL</a></td>
                                    <td><a>brauner Rohrzucker</a></td>
                                </tr>
                                <tr>
                                    <td><a> 1-2</a></td>
                                    <td><a>Limette</a></td>
                                </tr>
                                <tr>
                                    <td><a> 4 cl</a></td>
                                    <td><a>Rum (weiss)</a></td>
                                </tr>
                                <tr>
                                    <td><a> 1 cl</a></td>
                                    <td><a>Rum (braun)</a></td>
                                </tr>
                                <tr>
                                    <td><a></a></td>
                                    <td><a>Sodawasser</a></td>
                                </tr>
                            </table>  
                        </div>
                    </div>
                </div>
                <!-- Shots -->
                <div class="flip-box shot">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <h2>Kamikaze</h2>
                            <img src="images/Kamikaze.jpeg" alt="Kamikaze" class="rezeptImg-right">
                        </div>
                        <div class="flip-box-back">
                            <h3>Zutaten</h3>
                            <table class="zutatenTabelle">
                                <tr>
                                    <td><a> 2 cl</a></td>
                                    <td><a>Limettenlikör</a></td>
                                </tr>
                                <tr>
                                    <td><a> 2 cl</a></td>
                                    <td><a>Orangenlikör</a></td>
                                </tr>
                                <tr>
                                    <td><a> 2 cl</a></td>
                                    <td><a>Vodka</a></td>
                                </tr>
                            </table> 
                        </div>
                    </div>
                </div>
                <div class="flip-box shot">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <h2>Wolfsbite</h2>
                            <img src="images/Wolfsbite.jpg" alt="Wolfsbite" class="rezeptImg-right">
                        </div>
                        <div class="flip-box-back">
                            <h3>Zutaten</h3>
                            <table class="zutatenTabelle">
                                <tr>
                                    <td><a> 1 cl</a></td>
                                    <td><a>Absinth</a></td>
                                </tr>
                                <tr>
                                    <td><a> 1 cl</a></td>
                                    <td><a>Midori Melonenlikör</a></td>
                                </tr>
                                <tr>
                                    <td><a> 2 cl</a></td>
                                    <td><a>Ananassaft</a></td>
                                </tr>
                                <tr>
                                    <td><a> 1 Spritzer</a></td>
                                    <td><a>Zitronenlimonade</a></td>
                                </tr>
                                <tr>
                                    <td><a> 1 Spritzer</a></td>
                                    <td><a>Grenadine</a></td>
                                </tr>
                            </table> 
                        </div>
                    </div>
                </div>
                <div class="flip-box shot">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <h2>Bloody Brain</h2>
                            <img src="images/BloodyBrain.jpg" alt="Bloody Brain" class="rezeptImg-right">
                        </div>
                        <div class="flip-box-back">
                            <h3>Zutaten</h3>
                            <table class="zutatenTabelle">
                                <tr>
                                    <td><a> 1 cl</a></td>
                                    <td><a>Pfirsichlikör</a></td>
                                </tr>
                                <tr>
                                    <td><a> 0,7 cl</a></td>
                                    <td><a>Irischer Cremelikör</a></td>
                                </tr>
                                <tr>
                                    <td><a> 0,3 cl</a></td>
                                    <td><a>Grenadine</a></td>
                                </tr>
                            </table> 
                        </div>
                    </div>
                </div>
                <div class="flip-box shot">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <h2>Shot Tequila Silver</h2>
                            <img src="images/ShotTequilaSilver.jpg" alt="Shot Tequila Silver" class="rezeptImg-right">
                        </div>
                        <div class="flip-box-back">
                            <h3>Zutaten</h3>
                            <table class="zutatenTabelle">
                                <tr>
                                    <td><a> 4 cl</a></td>
                                    <td><a>Tequila (silver)</a></td>
                                </tr>
                                <tr>
                                    <td><a> 1 Prise</a></td>
                                    <td><a>Salz</a></td>
                                </tr>
                            </table> 
                        </div>
                    </div>
                </div>
                <div class="flip-box shot">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <h2>Electric Blue</h2>
                            <img src="images/ElectricBlue.jpg" alt="Electric Blue" class="rezeptImg-right">
                        </div>
                        <div class="flip-box-back">
                            <h3>Zutaten</h3>
                            <table class="zutatenTabelle">
                                <tr>
                                    <td><a> 1 cl</a></td>
                                    <td><a>Blue Curaçao</a></td>
                                </tr>
                                <tr>
                                    <td><a> 1 cl</a></td>
                                    <td><a>Rum (weiss)</a></td>
                                </tr>
                                <tr>
                                    <td><a> 1 cl</a></td>
                                    <td><a>Kokoslikör</a></td>
                                </tr>
                                <tr>
                                    <td><a> 1 cl</a></td>
                                    <td><a>Zitronensaft</a></td>
                                </tr>
                            </table> 
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

            for(var i = 0; i < buttons.length; i++)
            {
                buttons[i].addEventListener("click", function()
                    {
                        var current = document.getElementsByClassName("active");
                        current[0].className = current[0].className.replace(" active", "");
                        this.className += " active";
                    }
                );
            }
        </script>
    </body>
</html>