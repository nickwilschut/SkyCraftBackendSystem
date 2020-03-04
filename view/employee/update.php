<h1>Persoon wijzigen</h1>


<form name="update" method="post" action="<?=URL?>employee/update">
    <input type="hidden" name="id" value="<?=$employee["id"] ?>"/>
		
		<label for="name"><b>naam</b></label>
        <input type="text" name="name" class="form-control" placeholder="Vul hier de nieuwe naam in"  required>
		<br>
 	 	<label for="age"><b>leeftijd</b></label>
        <input type="text" name="age" class="form-control" placeholder="Vul hier de nieuwe leeftijd in"  required>
		<br>

          <button type="submit" class="btn btn-primary">verzenden</button>

	</form>