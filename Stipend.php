<html>
    <div style='margin-top:15px; padding:5px; background-color:white'>

<form action='<?php echo $_SERVER["PHP_SELF"];?>' method="post">
		<input type="number" name="glavoro" placeholder="Quanti giorni durera' il lavoro?"/><br/>
        <p size="4", color="red">Campo obbligatorio</p><br>
        <p>Ore giornaliere di lavoro</p><br>
		<input type="number" name="hlavoro" placeholder="Quante ore lavori al giorno?"/><br/>
        <p size="4", color="red">Campo obbligatorio</p><br>
        <p>Compenso orario</p>
        <input type="number" name="poraria" placeholder="Quanto verrai pagato all'ora?"/><br>
        <p size="4", color="red">Campo obbligatorio</p><br>
		<input type="submit" name="calcolo" value="Calcola"/><br>
        <p>Guadagnerai <b>300$</b>lavorando 3 giorni al compenso di 30$/h</p>
	</form>
</div>
</html>
<?php
if (isset($_POST["calcolo"]))
{
    $glav = $_POST["glavoro"];
    $hlav = $_POST["hlavoro"];
    $pora = $_POST["poraria"];

    function tot($glav, $hlav, $pora){
		 
		$tot = ($pora*$hlav)*$glav;
		return $tot;
		}
		
		$tot = tot($glav, $hlav, $pora);
		echo "La paga totale e': ".$tot; 
        echo "$"; 
}
?>