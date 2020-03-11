<h1>Persoon verwijderen</h1>
<form name="delete" method="post" action="<?=URL?>main/destroy">
    <input type="hidden" name="id" value="<?=$users["id"]?>"/>
    <input type="hidden" name="table" value="users"/>
    
    <button type="submit" class="btn btn-primary">verwijderen</button>
</form>

