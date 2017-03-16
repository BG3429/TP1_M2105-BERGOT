<a href="?"><button type="button">Tableau par défault</button></a><br>
<a href="?lin=15&col=15"><button type="button">Tableau de 15 x 15</button></a><br>
<a href="?lin=5&col=5"><button type="button">Tableau de 5 x 5</button></a><br>

<hr>
<form method="get" action="?">
	<input value="<?php echo $lin;?>" type="number" min="1" max="100" name="lin" placeholder="Nombres de lignes">
	<input value="<?php echo $col;?>" type="number" min="1" max="100" name="col" placeholder="Nombres de colonnes">
	<input type="submit" value="Créer un tableau">
</form>

<?php
function createHTMLTable($nb_lin,$nb_col){
	$result="<table border='1'><tbody>";
	for($i=0;$i<$nb_lin;$i++){
		$result.="<tr>";
		for($j=0;$j<$nb_col;$j++){
			$result.="<td>{$i}-{$j}</td>";
		}
		$result.="</tr>";
	}
	$result.="</tbody></table>";
	return $result;
}
$lin=10;$col=10;
extract($_GET);
echo createHTMLTable($lin,$col);///////////EX url: ...index.php?lin=20&col=10
?>

