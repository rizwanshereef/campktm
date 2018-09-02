<!DOCTYPE html>
<html>
	<title>Camp Kottayam</title>
	<head>
		<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
		

		
		<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
		<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
		<script type="text/javascript" language="javascript" >
		
		
		
		
			$(document).ready(function() {
				var dataTable = $('#employee-grid').DataTable( {
					"processing": true,
					"serverSide": true,
					"ajax":{
						url :"employee-grid-data.php", // json datasource
						type: "post",  // method  , by default get
						error: function(){  // error handling
							$(".employee-grid-error").html("");
							$("#employee-grid").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
							$("#employee-grid_processing").css("display","none");
							
						}
					}
				} );
			} );
		</script>
		<style>
			div.container {
			    margin: 0 auto;
			   
			}
			div.header {
			    margin: 100px auto;
			    line-height:30px;
			    
			    
			}
			body {
			    background: #f7f7f7;
			    color: #333;
			    font: 90%/1.45em "Helvetica Neue",HelveticaNeue,Verdana,Arial,Helvetica,sans-serif;
			}
			
			
			
		
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}

			
		</style>
	</head>
	<body>
		<div class="header"><center><h1>Relief Camp Person Search Kottayam </h1>
		<pre>We are still adding more data | To help collect more data around you | contact : rsrizwan77@gmail.com </pre>
		</center>
		</div>
		<div class="container">
			<table id="employee-grid"  cellpadding="0" cellspacing="0" border="0" class="display" width="100%">
					<thead>
						<tr>
							<th> name</th>
							<th>Age</th>
							<th>Sex</th>
							<th>Address </th>
							<th>Location </th>
							<th>Camp </th>




						</tr>
					</thead>
			</table>
		</div>
	</body>
</html>
