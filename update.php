<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <?php
 echo "<title>UPDATE</title><h1>UPDATE</h1>";
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

echo '<form action = "updating.php" method = "GET">
		<b style="font-size: 24px">input id yang akan di ubah </b><br/><table class="table"><tbody>
         <tr class="info"><td>id</td><td> <input type = "text" name = "id" /></td></tr>
         <tr class="active"><td><b style="font-size: 24px">input id dan nama matkul yang baru</b></td><td/></tr>
         <tr class="warning"><td>id2</td><td> <input type = "text" name = "id2" /></td></tr>
         <tr class="success"><td>nama2</td><td> <input type = "text" name = "nama2" /></td></tr>
         <tr class="danger"><td/><td><input type = "submit" value="submit" /></td></tr>
         </tbody></table>
      </form>';
echo "<a href='hom.html' >back</a>";
$conn->close();
?> 
