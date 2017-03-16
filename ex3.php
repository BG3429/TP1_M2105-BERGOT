<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exo 3 - TP1</title>
    </head>
    <style>
       table, th, td 
        {
            border: 1px solid black;
        }
        .colred
        {
            color: red;
        }
    </style>
    <body>
<?php
function createHTMLTable() //les 2 valeures buttoires récup par un get...
    /// Ex: de syntaxe :       ex3.php?lin=5&col=5
       {
           $nb_lin=0; //création d'un incrément pour laisser inchangé les val. buttoires
           $change=TRUE; //création d'une bool afin de faire 1 Ligne /2 en <b></b>
           echo"<table>";
           for ($nb_lin=0 ; $nb_lin<=$_GET["lin"]-1 ; $nb_lin++){
               $nb_col=0;  
                echo '<tr>';
                   if ($change==TRUE){
                       for ($nb_col=0 ; $nb_col<=$_GET["col"]-1 ; $nb_col++){
                           if ($nb_col%2==0){//tester si le nombre est pair
                               echo "<td class=colred>{$nb_lin} - {$nb_col}</td>";
                           }
                           else{
                               echo "<td>{$nb_lin} - {$nb_col}</td>";
                           }
                       }
                       $change=FALSE;
                   }
                   else{
                       for ($nb_col=0 ; $nb_col<=$_GET["col"]-1 ; $nb_col++){
                           if ($nb_col%2==0){//tester si le nombre est pair
                               echo "<td class=colred> <b> {$nb_lin} - {$nb_col} </b> </td>";
                           }
                           else{
                               echo "<td> <b> {$nb_lin} - {$nb_col} </b> </td>";
                           }
                       }
                       $change=TRUE;
                   }
               echo "</tr>";
               }
           echo"</table>";
        }
        createHTMLTable();
?>
	</body>
</html>