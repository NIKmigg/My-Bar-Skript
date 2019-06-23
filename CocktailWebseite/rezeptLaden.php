<?php

    session_start();
    include("DBconnect.php");

    $nutzer = $_SESSION['name'];

    $statement = $pdo->prepare("SELECT * FROM eigenesrezept WHERE User = :name");
    $statement->execute(array('name' => $nutzer));
    
    while($rezept = $statement->fetch())
    {

        echo '<div class="flip-box show">';
        echo '<div class="flip-box-inner">';
            echo '<div class="flip-box-front">';
                echo '<h2>';
                echo $rezept['Bezeichnung'];
                echo '</h2>';         
                echo '<img src="';
                echo $rezept['Bild'];
                echo '" class="rezeptImg-right">';
            echo '</div>';     
            echo '<div class="flip-box-back">';     
                echo '<h3>Zutaten</h3>';         
                echo '<table class="zutatenTabelle">';        
                    echo '<tr>';            
                    echo '<td><a>';   
                    echo $rezept['Zutat1'];
                    echo '</a></td>';
                    echo '</tr>';                        
                    echo '<tr>';            
                    echo '<td><a>';   
                    echo $rezept['Zutat2'];
                    echo '</a></td>';
                    echo '</tr>';
                    echo '<tr>';            
                    echo '<td><a>';   
                    echo $rezept['Zutat3'];
                    echo '</a></td>';
                    echo '</tr>';
                    echo '<tr>';            
                    echo '<td><a>';   
                    echo $rezept['Zutat4'];
                    echo '</a></td>';
                    echo '</tr>';
                    echo '<tr>';            
                    echo '<td><a>';   
                    echo $rezept['Zutat5'];
                    echo '</a></td>';
                    echo '</tr>';
                    echo '<tr>';            
                    echo '<td><a>';   
                    echo $rezept['Zutat6'];
                    echo '</a></td>';
                    echo '</tr>';                        
                    echo '<tr>';            
                    echo '<td><a>';   
                    echo $rezept['Zutat7'];
                    echo '</a></td>';
                    echo '</tr>';
                    echo '<tr>';            
                    echo '<td><a>';   
                    echo $rezept['Zutat8'];
                    echo '</a></td>';
                    echo '</tr>';
                    echo '<tr>';            
                    echo '<td><a>';   
                    echo $rezept['Zutat9'];
                    echo '</a></td>';
                    echo '</tr>';
                    echo '<tr>';            
                    echo '<td><a>';   
                    echo $rezept['Zutat10'];
                    echo '</a></td>';
                    echo '</tr>';
                echo '</table>';         
            echo '</div>';     
        echo '</div>'; 
    echo '</div>';
    }

    // echo $rezept == "" ? "Keine Rezepte gefunden!" : $rezept['Zutat1'];
    // echo '<div class="flip-box test">';
    // echo '<div class="flip-box-inner">';
    // echo '<div class="flip-box-front">';
    // echo 'Name';
    // echo '</div></div></div>';
    // echo "Test 2";

    
?>