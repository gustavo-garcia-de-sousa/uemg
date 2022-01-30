<?php

//function.php

$connect = new PDO("mysql:host=localhost;dbname=clube_recanto", "root", "Hz31%9598x0K");

function fetch_top_five_data($connect)
{
	$query = "
	SELECT * FROM usuarios
	ORDER BY id_usuarios DESC 
	LIMIT 5";

	$result = $connect->query($query);

	$output = '';

	foreach ($result as $row) {
		$output .= '
		
		<tr>
			<td>' . $row["usuario"] . '</td>
			<td>' . $row["email"] . '</td>
			<td>' . $row["senha"] . '</td>
			<td><button type="button" onclick="fetch_data(' . $row["id_usuarios"] . ')" class="btn btn-warning btn-sm">Edit</button>&nbsp;<button type="button" class="btn btn-danger btn-sm" onclick="delete_data(' . $row["id_usuarios"] . ')">Delete</button></td>
		</tr>
		';
	}
	return $output;
}

function count_all_data($connect)
{
	$query = "SELECT * FROM usuarios";

	$statement = $connect->prepare($query);

	$statement->execute();

	return $statement->rowCount();
}
