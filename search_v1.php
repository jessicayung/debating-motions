<!DOCTYPE html>
<html lang="en">
  <head>
  <?php 
    ini_set('display_errors', 1);
  ?>
  </head>
  <body>
    <form action="search.php?go" method="get" id="searchform" >
                <div class="form-group, col-md-6">
                    <input class="form-control" type="text" placeholder="e.g. International Relations, WUDC, Cambridge IV" name="name">
                </div>
                <p><div class="form-group">
                <button type="submit" class="btn btn-success">Search</button>
                </div></p>
    </form>
    <p> Your search query for <?php $_GET['name'] ?> returned results.</p>
    <?php 
      if(isset($_POST['submit'])) {
        if(isset($_GET['go'])) {
//                    if(preg_match("^/[A-Za-za]+/", $_POST['name'])) {
          $servername = "localhost";
          $username = "root";
          $password = "root";
          $dbname = "searchtest";
          $name = $_GET['name'];
          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
          } 

          $sql = "SELECT ID, FirstName, LastName FROM Contacts WHERE FirstName LIKE '%" . $name . "%'OR LastName LIKE '%" . $name . "%'";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
               echo "<table><tr><th>ID</th><th>Name</th></tr>";
               // output data of each row
               while($row = $result->fetch_assoc()) {
                   echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["FirstName"]. " " . $row["LastName"]. "</td></tr>";
               }
               echo "</table>";
          } else {
               echo "0 results";
          }

          $conn->close();

          }
//                  } 
        else {
          echo "<p>Please enter a search query</p>";
        }
      }
    ?>
  </body>
