<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Ejemplos</title>
  <!-- Bootstrap core CSS-->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Page level plugin CSS-->
  <link href="datatables/dataTables.bootstrap4.css" rel="stylesheet">
</head>
<body>
  
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </tfoot>
              <tbody>
              <?php
$conn = new mysqli("localhost","root","","test");

$res = $conn->query("select * from productos");

				while ($row = $res->fetch_array()) {
					echo "<tr>";
					echo "<td>".$row['id']."</td>";
					echo "<td>".$row['codigo']."</td>";
					echo "<td>".$row['seccion']."</td>";
					echo "<td>".$row['nombre']."</td>";
					echo "<td>".$row['precio']."</td>";
					echo "<td>".$row['fecha']."</td>";
					echo "</tr>";
				}
?>
              </tbody>
            </table>

  <script src="jquery.js"></script>
  <script src="datatables/jquery.dataTables.js"></script>
  <script src="datatables/dataTables.bootstrap4.js"></script>
  <script src="js/sb-admin-datatables.js"></script>
</body>
</html>