<h1>Add user</h1>


<form name="create" method="post" action="create">
	<form method="post" action="model/MainModel"/>
	<input type="hidden" name="table" value="users"/>

 	<label for="name"><b>name</b></label>
    <input type="text" name="name" class="form-control mb-4" placeholder="Enter name"  required>

	<label for="age"><b>leeftijd</b></label>
    <input type="text" name="age" class="form-control mb-4" placeholder="Enter age"  required>

    <button type="submit" class="btn btn-primary">verzenden</button>
</form>

