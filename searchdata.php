<html>
<head>
	<title>Search data by its ID</title>
</head>
<body>
	<center>
		<h1> Search for a single data</h1>
	

	<div class="container">
		<form action="" method="post">
			<input type="text" name="id" placeholder="enter id"/>
			<input type="submit" name="Search" value="search by id"> 
		</form>
		<table>
		<tr>
				<th>FIrst name</th>
				<th>last name</th>
				<th>email</th>
				<th>password</th>
				<th>Father name<th>
				<th>address</th>
				<th>phone number</th>
			</tr><br>
			<?php
			$conn = mysqli_connect("localhost","root","");
			$db = mysqli_select_db($conn,'data');

			if (isset($_POST['search'])) 
			{
				$id = $_POST['id'];

				$query = "SELECT * FROM `tabel` where id='$id'";
				$query_run = mysqili_query($conn,$query);
				while ($row = mysqli_fetch_array($query_run)) 
				{
					?>
					<tr>
						<td><?php echo $row['fname'] ?></td>
						<td><?php echo $row['lname'] ?></td>
						<td><?php echo $row['email'] ?></td>
						<td><?php echo $row['pass'] ?></td>
						<td><?php echo $row['fathername'] ?></td>
						<td><?php echo $row['address'] ?></td>
						<td><?php echo $row['phone'] ?></td>
					</tr>
					<?php
				}
			}
			?>
		</table>
	</div>
		</center>
			
			

				
	</div>
</body>
</html>