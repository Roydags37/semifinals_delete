<?php

	require 'database.php';

	$id = $_GET['id'];

	$query = "DELETE FROM employees_delete WHERE id = {$id}";

	$statement = $pdo->prepare($query);

	$statement->execute();

	header('Location: index.php');