
 <a class="btn btn-primary" href="?action=add">Add User</a> 
 <br>
 <br>

<table class="table table-hover table-bordered table-striped">
        <thead>
           <tr>
            <th>id</th>
            <th>username</th>
            <th>email</th>
            <th>address</th>
            <th>gender</th>
            <th>privileges</th>
			<th>controls</th>
        </thead>
            <tbody>
			<?php 
		include "functions/connect.php";
		$select ="SELECT * FROM users";
		$query  =$conn ->query ($select);
		foreach ($query as $user){ ?> 
        <tr>
			<td><?=$user['id']?></td>
			<td><?=$user['username']?></td>
			<td><?=$user['email']?></td>
			<td><?=$user['address']?></td>
			<td><?php
			if ($user['gender']==0){
				echo 'male';}
				else 
				{
				echo 'female';}
			
			
			?></td>
			<td><?= $user['privileges']==0?"admin":"user"?></td>
			<td> <a class= "btn btn-primary" href="?action=edit&id=<?=$user['id']?>">edit</a> 
			<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?=$user['id']?>">
 Delete
</button>

<!-- Modal -->
<div class="modal fade" id="<?=$user['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       You want delete <spam class="text-danger" style="font-weight:bold"><?=$user['username']?></spam> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="functions/delete.php?id=<?=$user['id']?>" class="btn btn-danger">Confirm</a>
      </div>
    </div>
  </div>
</div>
		</td>
      </tr>
	  <?php } ?>
      </tbody>
   </table>
