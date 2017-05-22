<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <?php
 echo "<title>SELECT</title><h1>SELECT</h1>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "big";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT idmatkul, namamatkul FROM matkul";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    echo "<table class='table'>";
    echo "<tr><td>ID MATKUL</td><td>NAMA MATKUL</td</tr><tbody>";
    while($row = $result->fetch_assoc()) {
    $col=(rand(1,5));
  $sty="active";
  if ($col==1) {
    $sty="active";
  }elseif ($col==2) {
    $sty="warning";
  }elseif ($col==3) {
    $sty="info";
  }elseif ($col==4) {
    $sty="danger";
  }elseif ($col==5) {
    $sty="success";
  }
        echo "<tr class='".$sty."'><td> " . $row["idmatkul"].
         " </td><td>" . $row["namamatkul"]."</tr>";
    }
    echo "</tbody></table>";
} else {
    echo "0 results";
}
echo "<a href='hom.html' >back</a>";
$conn->close();
?> 