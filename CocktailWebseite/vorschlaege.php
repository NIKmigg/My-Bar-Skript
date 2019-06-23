<?php
    //Frucht & Saft
    $a[] = "Zitrone";
    $a[] = "Zitronensaft";
    $a[] = "Orange";
    $a[] = "Orangensaft";
    $a[] = "Maraqujasaft";
    $a[] = "Mango";
    $a[] = "Mangosaft";
    $a[] = "Traubensaft";
    $a[] = "Johannisbeersaft";
    $a[] = "Limette";
    $a[] = "Limettensaft";

    //Limonaden
    $a[] = "Cola";
    $a[] = "Fanta";
    $a[] = "Sprite";
    $a[] = "Ginger Ale";
    $a[] = "Bitter Lemon";

    //Andere
    $a[] = "Wasser";
    $a[] = "Eiswürfel";
    $a[] = "Grenadine";
    $a[] = "Apricot Brandy";

    //Alkohol
    $a[] = "Vodka";
    $a[] = "Jägermeister";
    $a[] = "Gin";
    $a[] = "Whisky";
    $a[] = "Cachaça";
    $a[] = "Rum";
    $a[] = "Absinth";
    $a[] = "Tequila";
    $a[] = "Blue Curaçao";

    //Parameter
    $q = $_REQUEST["q"];
    $hint = "";

    //Vorschläge durchsuchen
    if($q != "")
    {
        $q = strtolower($q);
        $len = strlen($q);
        foreach($a as $name)
        {
            if(stristr($q, substr($name, 0, $len)))
            {
                if($hint == "")
                {
                    $hint = $name;
                }
                else
                {
                    $hint .= ", $name";
                }
            }
        }
    }
    echo $hint == "" ? "Keine Zutat gefunden!" : $hint;
?>