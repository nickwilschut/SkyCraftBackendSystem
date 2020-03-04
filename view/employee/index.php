

	<h1>Overzicht van personen</h1>
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
			  		foreach ($employees as $employee) {
			  		?>
			    <tr>

			    	<td><?=$employee["name"]?></td>
			    	<td><?=$employee["age"]?></td>
			     
			      <td><a href="<?=URL?>employee/edit/<?=$employee["id"]?>" type="button" class="btn btn-primary">
  					  	<i class="fas fa-user-edit"></i>
					  </a>
					  
					  <a href="<?=URL?>employee/delete/<?=$employee["id"]?>" type="button" class="btn btn-danger">
					  	<i class="fas fa-user-minus"></i>
					  </a>
				  </td>	 

				  <?php
				  	}
				  ?> 

			    </tr>
			    
			  </body>
			</table>

			

	</ul>