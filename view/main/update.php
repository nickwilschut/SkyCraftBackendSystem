<h1>Change User</h1>
<form name="update" method="post" action="<?=URL?>main/update">
    <input type="hidden" name="id" value="<?=$users["id"] ?>"/>
    <input type="hidden" name="table" value="users"/>
	
	<label for="name"><b>name</b></label>
    <input type="text" name="name" class="form-control mb-4" placeholder="Enter new name" required>

	<label for="age"><b>age</b></label>
    <input type="text" name="age" class="form-control mb-4" placeholder="Enter new age" required>

	<button type="submit" class="btn btn-primary">verzenden</button>
</form>