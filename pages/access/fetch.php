<?php

//fetch.php

include('function.php');

$startGET = filter_input(INPUT_GET, "start", FILTER_SANITIZE_NUMBER_INT);

$start = $startGET ? intval($startGET) : 0;

$lengthGET = filter_input(INPUT_GET, "length", FILTER_SANITIZE_NUMBER_INT);

$length = $lengthGET ? intval($lengthGET) : 10;

$searchQuery = filter_input(INPUT_GET, "searchQuery", FILTER_SANITIZE_STRING);

$search = empty($searchQuery) || $searchQuery === "null" ? "" : $searchQuery;

$sortColumnIndex = filter_input(INPUT_GET, "sortColumn", FILTER_SANITIZE_NUMBER_INT);

$sortDirection = filter_input(INPUT_GET, "sortDirection", FILTER_SANITIZE_STRING);

$column = array("usuario", "email", "senha");

$query = "SELECT * FROM usuarios ";

$query .= '
	WHERE id_usuarios LIKE "%'.$search.'%" 
	OR usuario LIKE "%'.$search.'%" 
	OR email LIKE "%'.$search.'%" 
	OR senha LIKE "%'.$search.'%" 
	';


if($sortColumnIndex != '')
{
	$query .= 'ORDER BY '.$column[$sortColumnIndex].' '.$sortDirection.' ';
}
else
{
	$query .= 'ORDER BY id_usuarios DESC ';
}

$query1 = '';

if($length != -1)
{
	$query1 = 'LIMIT ' . $start . ', ' . $length;
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$result = $connect->query($query . $query1);

$data = array();

foreach($result as $row)
{
	$sub_array = array();

	$sub_array[] = $row['usuario'];

	$sub_array[] = $row['email'];

	$sub_array[] = $row['senha'];

	$sub_array[] = '<button type="button" onclick="fetch_data('.$row["id_usuarios"].')" class="btn btn-warning btn-sm">Edit</button>&nbsp;<button type="button" class="btn btn-danger btn-sm" onclick="delete_data('.$row["id_usuarios"].')">Delete</button>';

	$data[] = $sub_array;
}



$output = array(
	"recordsTotal"		=>	count_all_data($connect),
	"recordsFiltered"	=>	$number_filter_row,
	"data"				=>	$data
);

echo json_encode($output);

?>