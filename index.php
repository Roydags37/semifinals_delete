<?php

require 'database.php';

$statement = $pdo->prepare('SELECT * FROM employees_delete');

$statement->execute();

$semifinals_delete = $statement->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Intro to SQL</title>
	<link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
	<style>
	#customers {
		font-family: Arial, Helvetica, sans-serif;
		border-collapse: collapse;
		width: 100%;
	}

	 #customers td, #customers th {
		border: 1px solid #ccc;
		padding: 8px;
	}

	#customers th {
		background-color: #c3c3c3;
	}
	/*
	#customers tr:nth-child(even){background-color: #f2f2f2;}

	#customers tr:hover {background-color: #ddd;} */

	#customers th {
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: left;
		/* background-color: #16423C; */
		color: black;
	}
	</style>

</head>
<body>

<div class="px-6">
	
<h2 class="text-center font-medium text-3xl mb-4">Employees Officially Hired</h2>
	
	<table id="customers" class="mt-6">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Age</th>
			<th>Address</th>
			<th>Action</th>
		</tr>
		<?php 
			foreach ($semifinals_delete as $employee) {
				echo "<tr>";
				echo "<td> {$employee['id']} </td>";
				echo "<td> {$employee['name']} </td>";
				echo "<td> {$employee['age']} </td>";
				echo "<td> {$employee['address']} </td>";
				echo "<td>
					<a href='delete.php?id={$employee['id']}'>
					<button data-employee-id={$employee['id']} type='button' data-modal-target='popup-modal' data-modal-toggle='popup-modal' class='delete-record-btn focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900'>Delete</button>
					</td>";
				echo "</tr>";
			}
		?>
	</table>			


<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>     

</body>
</html>