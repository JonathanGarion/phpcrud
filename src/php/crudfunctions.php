<!-- show message -->
<?php if (isset($_SESSION['message'])): ?>
		<div class="msg">
			<?php
				echo $_SESSION['message'];
				unset($_SESSION['message']);
			?>
		</div>
<?php endif ?>

<!-- edit items -->
<?php
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM employees WHERE id=$id");

		if (count($record) == 1) {
			$n = mysqli_fetch_array($record);
			$firstname = $n['firstname'];
			$lastname  = $n['lastname'];
			$gender    = $n['gender'];
			$developer = $n['developer'];
		}
	}
?>
