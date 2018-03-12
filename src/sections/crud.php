<section class="crud">
	<form class="create" action="" method="post">
		<div class="input-group">
			<label>First Name</label>
			<input type="text" name="firstname" value="" placeholder="firstname...">
		</div>
		<div class="input-group">
			<label>Last Name</label>
			<input type="text" name="lastname" value="" placeholder="lastname...">
		</div>
		<div class="input-group">
			<label>Gender</label>
			<div>
				<label>Male</label>
				<input type="radio" name="gender" value="male">
				<label>Female</label>
				<input type="radio" name="gender" value="female">
			</div>
		</div>
		<div class="input-group">
			<label>Developer</label>
			<select name="developer">
				<option value="front end">front end</option>
				<option value="back end">back end</option>
				<option value="full stack">full stack</option>
			</select>
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save</button>
		</div>
	</form>
	<table class="read">
		<?php $results = mysqli_query($db, "SELECT * FROM employees"); ?>
		<thead>
			<tr>
				<th>Id</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Gender</th>
				<th>Developer</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<?php while ($row = mysqli_fetch_array($results)) { ?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['firstname']; ?></td>
				<td><?php echo $row['lastname']; ?></td>
				<td><?php echo $row['gender']; ?></td>
				<td><?php echo $row['developer']; ?></td>
				<td><a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a></td>
				<td><a href="config.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a></td>
			</tr>
		<?php } ?>
	</table>
</section>
