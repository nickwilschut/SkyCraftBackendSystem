<h1>Voeg een medewerker toe</h1>


<form name="create" method="post" action="create">
	<form method="post" action="model/EmployeeModel">

	 	<label for="name"><b>naam</b></label>
        <input type="text" name="name" class="form-control" placeholder="Vul hier de naam in"  required>
		<br>
 	 	<label for="age"><b>leeftijd</b></label>
        <input type="text" name="age" class="form-control" placeholder="Vul hier de leeftijd in"  required>
		<br>

          <button type="submit" class="btn btn-primary">verzenden</button>

</form>