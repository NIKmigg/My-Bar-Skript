<!DOCTYPE html>
<html lang="de">
    <head>
        <title>My-Bar | Home</title>
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
                    <li class="active"><a href="home.php">Home</a></li>
                    <li><a href="rezepte.php">Rezepte</a></li>
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
                <h1>Willkommen</h1>
            </div>
            <div class="col-sm-12">
                <p>
                    Lust auf'n Drink?<br> Dann bist du hier genau richtig! ... <br><br>
                    Hier findest du leckere Rezepte für Longdrinks, Cocktails und natürlich Shots.<br><br>
                    Wenn du keine Lust auf bereits bestehende Rezepte hast, kannst du dir ganz einfach deinen eigenen Drink mixen!<br>
                    Gespeichert werden deine Eigenkreationen auch ...<br>
                    <br>
                </p>
                <p id="geschichte-text">
                    <b>Was ist eigentlich ein Cocktail?</b>
                    <br><br>
                    Ein Cocktail ist ein alkoholisches Mischgetränk. Typischerweise bestehen Cocktails aus zwei oder mehr Zutaten, 
                    darunter mindestens einer Spirituose. Sie werden mit Eis im Cocktail-Shaker, Rührglas oder direkt im Cocktailglas 
                    einzeln frisch zubereitet, in einem passenden Glas angerichtet und sofort serviert und getrunken. Üblicherweise ist 
                    jedes Cocktail-Rezept mit einem einprägsamen Namen versehen. Einige Cocktails sind international bekannt und werden 
                    von Barkeepern weltweit gemixt. 

                    <img src="images/TequilaSunriseHome.jpg" id="img1" alt="Tequila Sunrise"> 

                    <br><br>
                    <b>Das Goldene Zeitalter der Cocktails</b>
                    <br><br>
                    Ein wichtiger Meilenstein in der Cocktailgeschichte ist ein Buch: 1862 veröffentlichte Jerry Thomas seine legendäre 
                    Rezeptsammlung How to Mix Drinks, or the Bon Vivant’s Companion. Zuvor war Thomas schon mehrere Jahre lang als 
                    Barkeeper quer durch die Vereinigten Staaten getingelt. In seinem Buch hatte er zahlreiche Mixrezepte gesammelt und 
                    kategorisiert. Erstmals war damit eine Art „offizieller Kanon“ der nordamerikanischen Mixgetränke entstanden. Das Buch 
                    verbreitete sich in mehreren Auflagen und zahlreichen, teilweise nicht autorisierten Nachdrucken sehr schnell, sogar bis 
                    zurück nach Europa. Zu Jerry Thomas’ Zeiten war der Cocktail übrigens immer noch ein Alltagsgetränk, es gab ihn sogar fertig 
                    in Flaschen und man konnte ihn auf einen Ausflug oder zu einem Picknick mitnehmen:
                </p>
                    <br>
                    <p class="geschichte-zitat">
                        „The cocktail is a modern invention and is generally used on fishing and other sporting parties, 
                        although some patients insist that it is good in the morning as a tonic.“
                        „Der Cocktail ist eine moderne Erfindung und wird allgemein zum Fischen und zu anderen sportlichen Veranstaltungen mitgenommen, 
                        obwohl einige Patienten darauf bestehen, dass ein morgendlicher Cocktail ein gutes Stärkungsmittel ist.“
                        – Jerry Thomas
                    </p>
                    <br>
                <p id="geschichte-text">
                    <img src="images/GinTonicHome.jpg" id="img2" alt="Gin Tonic"> 
                
                    Die Phase bis zum Ende des 19. Jahrhunderts wird von vielen Autoren auch als das „Goldene Zeitalter der Cocktails“ bezeichnet. Anders als 
                    in Europa war es in Nordamerika damals üblich, Essen und Trinken in der Gastronomie zu trennen – es gab einerseits Restaurants, andererseits 
                    Saloons und Bars, die hauptsächlich Alkohol ausschenkten und dazu höchstens kleine Häppchen als kostenlose Beigabe reichten. Nach dem Amerikanischen 
                    Bürgerkrieg (1861–1865) schritt die Erschließung des „Wilden Westens“ weiter voran. Immer neue Städte mit ihren Bars und Saloons entstanden, 
                    beispielsweise entlang der Eisenbahnlinien, die seit 1869 die westlichen Bundesstaaten wie das 1850 aufgenommene Kalifornien mit denen im Osten verbanden.
                    Der Cocktail wandelte sich in dieser Zeit zum Oberbegriff für eine Vielzahl von Mixgetränken. Gleichzeitig professionalisierte sich der Berufsstand der 
                    Barkeeper und noch heute gültige Techniken bei der Zubereitung etablierten sich. Auch die ersten Cocktail-Shaker kamen auf und wurden sogar patentiert. 
                    Viele heute noch bekannte Klassiker wie der Martini bzw. dessen Vorläufer, der Martinez, der Old Fashioned und der Manhattan entstanden in jenen Jahren.
                    Mit einiger Verzögerung erreichte die Cocktail-Welle auch das kontinentale Europa, wo man die neuen Mixgetränke zunächst als „American Mixed Drinks“ 
                    bezeichnete. Die erste Definition eines Cocktails in deutscher Sprache findet sich in einem Kochlexikon aus dem Jahr 1886:                   
                </p>
                    <br>
                    <p class="geschichte-zitat">
                        <img src="images/MintJulepHome.jpg" id="img3" alt="Mint Julep">
                        „Cock-tail. Ein in Amerika sehr beliebtes Getränk, eine Art kalter Grog, welchen man aus Brandy, Bitter-Liqueur, Eis und Zucker zusammensetzt; 
                        zuweilen wird anstatt des Bitters auch Pfefferminz Liqueur genommen. Man hat Brandy-Cocktail, Whisky-Cocktail, Gin-Cocktail usw. je nachdem man zu 
                        einem Glase dieses Getränks Cognac oder anderen Branntwein nimmt. Das Verfahren ist folgendes: Man thut in ein Glas etwa zwei bis drei Esslöffel 
                        klargekochten Zucker-Sirup, drei Esslöffel Bitterliqueur, guten Pomeranzenbitter oder Magenbitter, ein Weinglas Cognac, Gin, oder Whisky, und ein 
                        Stück dünn abgeschälte Citronenschale, füllt das Glas zu einem Drittel mit gestoßenem Eis, schüttet das Getränk einige Mal hin und her, seith es 
                        durch und gießt es in ein großes Weinglas.“
                        – Universal-Lexikon der Kochkunst, Band 1, Leipzig 1886<br>
                    </p>
                </p>
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
        </script>
    </body>
</html>