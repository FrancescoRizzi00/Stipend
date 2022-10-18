<html>
    <div style='margin-top:15px; padding:5px; background-color:grey'>
>
<form action='<?php echo $_SERVER["PHP_SELF"];?>' method="post">
		<input type="text" name="glavoro" placeholder="Quanti giorni durera' il lavoro"/><br/>
        <p>Ore giornaliere di lavoro</p><br>
		<input type="text" name="hlavoro" placeholder="Quante ore lavori al giorno"/><br/>
        <p color="red">Compenso orario</p>
        <input type="text" name="poraria" placeholder="Quanto verrai pagato all'ora?"/><br>
		<input type="submit" name="calcolo" value="Calcola"/><br>
        <p>Guadagnerai <b>300€</b>lavorando 3 giorni al compenso di 30€/h</p>
	</form>
</div>
</html>