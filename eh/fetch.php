<?php
$connect = mysqli_connect("localhost:3306", "campktmm_soorya", "$00rya@db", "campktmm_keraladata");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM dbktm
	WHERE Name LIKE '%".$search."%'
	OR age LIKE '%".$search."%' 
	OR sex LIKE '%".$search."%' 
	OR addr LIKE '%".$search."%' 
	OR location LIKE '%".$search."%' 
	OR camp LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM dbktm ORDER BY id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Name</th>
							<th>Age</th>
							<th>Sex</th>
							<th>Address</th>
							<th>Location</th>
							<th>Camp</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["Name"].'</td>
				<td>'.$row["age"].'</td>
				<td>'.$row["sex"].'</td>
				<td>'.$row["addr"].'</td>
				<td>'.$row["location"].'</td>
				
				<td>'.$row["camp"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>