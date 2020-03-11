<h1>Users</h1>
	<ul>
		<table class="table table-hover">
			<thead>
			    <tr>
			    	<th scope="col">name</th>
			    	<th scope="col">age</th>
			    	<th scope="col">action</th>
			    </tr>
			</thead>
			<tbody>
				<?php 
				  	foreach ($users as $user) {
				?>
				<tr>
					<td><?=$user["name"]?></td>
			    	<td><?=$user["age"]?></td>
			      	<td>
			      		<a href="<?=URL?>main/edit/<?=$user["id"]?>" type="button" class="btn btn-primary"><i class="fas fa-user-edit"></i></a>
					  	<a href="<?=URL?>main/delete/<?=$user["id"]?>" type="button" class="btn btn-danger"><i class="fas fa-user-minus"></i></a>
				  	</td>	 
				</tr>
				<?php
				  	}
				?> 
			</body>
		</table>
	</ul>