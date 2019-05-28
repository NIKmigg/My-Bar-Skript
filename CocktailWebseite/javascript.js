var modal1 = document.getElementById('id01');
var modal2 = document.getElementById('id02');
var zaehler = 1;
//Array für Zutaten und Mengen
var zutaten = [];
var angemeldet = false;
            
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

function showZutat(str)
{
    if(str.length == 0)
    {
        document.getElementById("txtHint").innerHTML = "";
        return;
    }
    else
    {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function()
        {
            if(this.readyState == 4 && this.status == 200)
            {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "vorschlaege.php?q=" + str, true);
        xmlhttp.send();
    }
}

//Mixer
function zutatHinzufuegen()
{
    //Testen ob man angemeldet ist
    checkCookie();

    if(angemeldet == true)
    {
        var menge = document.getElementById("textFieldMenge").value;
        var zutat = document.getElementById("textFieldZutat").value;
    
        //Hinzufügen
        if(zutat.length != 0 && menge.length != 0)
        {
            document.getElementById("zutat" + zaehler).innerHTML = menge + " " + zutat;
            //Zutaten und Mengen hinzufügen
            zutaten.push(menge + " " + zutat);
            zaehler++;
        } 
    }        
}

function checkCookie()
{
    var user = getCookie("user");

    if(user == "")
    {
        snackbar("Du musst dich erst anmelden!");
        angemeldet = false;
    }
    else
    {
        angemeldet = true;
    }
}

function getCookie(user)
{
    var name = user + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');

    for(var i = 0; i < ca.length; i++) 
    {
        var c = ca[i];
        while(c.charAt(0) == ' ') 
        {
            c = c.substring(1);
        }
        if(c.indexOf(name) == 0) 
        {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function mixerLeeren()
{               
    //Array löschen und Zähler zurücksetzen
    zutaten = [];
    zaehler = 1;

    snackbar("Mixer geleert!");

    for(var i = 1; i <= 10; i++)
    {
        document.getElementById("zutat" + i).innerHTML = "";
    }
}

function rezeptSpeichern()
{
    checkCookie();

    if(angemeldet == true)
    {
        var bezeichnung = document.getElementById("textFieldName").value;
        var anleitung = document.getElementById("textFieldAnleitung").value;
        // var art = document.getElementById("textFieldArt").value;
        // var bild;

        // var uebergabe = "&bezeichnung=" + bezeichnung + "&anleitung=" + anleitung + "&zutat1=" + zutaten[0] + "&zutat2=" + zutaten[1] + "&zutat3=" + zutaten[2];
        var uebergabe = "&bezeichnung=" + bezeichnung + "&anleitung=" + anleitung;
        var top = zutaten.length - 1;

        

        var j = 1;
        for(var i = 0; i <= top; i++)
        {
            uebergabe += "&zutat" + j + "=" + zutaten[i];
            j++;
        }


        if (window.XMLHttpRequest) 
        {
            xmlhttp = new XMLHttpRequest();
        } 
        else 
        {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlhttp.open("POST", "rezeptSpeichernDb.php", false);
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp.setRequestHeader("Content-length", uebergabe.length);
        xmlhttp.send(uebergabe);
        //alert(uebergabe);
        snackbar("Rezept gespeichert!");
    }
}

function navButtons()
{
    var user = getCookie("user");

    if(user != "")
    {
        document.getElementById("navButtonsAnReg").style.display='none';
        document.getElementById("navButtonsAb").style.display='block';
    }
}

function abmelden()
{
    document.cookie = "";
    document.getElementById("navButtonsAnReg").style.display='block';
    document.getElementById("navButtonsAb").style.display='none';

    snackbar("Erfolgreich abgemeldet!");

    if (window.XMLHttpRequest) 
    {
        xmlhttp = new XMLHttpRequest();
    } 
    else 
    {
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.open("GET", "logout.php", true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send();
}

function snackbar(nachricht)
{
    var x = document.getElementById("snackbar");
    x.innerHTML = nachricht;

    x.className = "show";

    setTimeout(function()
    { 
        x.className = x.className.replace("show", ""); 
    }, 3000);
}

function check()
{
    navButtons();
}