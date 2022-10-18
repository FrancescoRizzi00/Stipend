<html>
    <div style='margin-top:15px; padding:5px; background-color:white'>
>
<form action='<?php echo $_SERVER["PHP_SELF"];?>' method="post">
		<input type="text" name="glavoro" placeholder="Quanti giorni durera' il lavoro?"/><br/>
        <p size="4", color="red">Campo obbligatorio</p><br>
        <p>Ore giornaliere di lavoro</p><br>
		<input type="text" name="hlavoro" placeholder="Quante ore lavori al giorno?"/><br/>
        <p size="4", color="red">Campo obbligatorio</p><br>
        <p>Compenso orario</p>
        <input type="text" name="poraria" placeholder="Quanto verrai pagato all'ora?"/><br>
        <p size="4", color="red">Campo obbligatorio</p><br>
		<input type="submit" name="calcolo" value="Calcola"/><br>
        <p>Guadagnerai <b>300$</b>lavorando 3 giorni al compenso di 30$/h</p>
	</form>
</div>
</html>
<?php
if (isset($_POST["tasto_invia"]))
{
    $glav = $_POST["glavoro"];
    $hlav = $_POST["hlavoro"];
    $pora = $_POST["poraria"];
    $paga = 0; 

    $paga = $paga ($pora*$hlav)*$glav; 

    echo "la paga per questo lavoro ti renderà : "; 
    echo $paga; 
    echo "$";

}
?>