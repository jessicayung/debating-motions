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
            $name=$_GET['name'];
            $servername = "localhost";
            $username = "root";
            $password = "root";
            //create connection
            $conn = new mysqli($servername, $username, $password);
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully";

            //select database to use
            $mydb=mysqli_select_db("searchtest");
            //query the database table
            $sql="SELECT ID, FirstName, LastName FROM Contacts WHERE FirstName LIKE '%" . $name . "%'OR LastName LIKE '%" . $name . "%'";
            //-run the query against the mysql query function
            $result=mysqli_query($sql);
            //-create while loop and loop through result set
            while($row=mysqli_fetch_array($result)) {
                $FirstName = $row['FirstName'];
                $LastName = $row['LastName'];
                $ID=$row['ID'];
              //-display the result of the array
              echo "<ul>\n";
              echo "<li>" . "<a href=\"search.php?id=$ID\">" . $FirstName . " " . $LastName ."/a><li>\n";
              echo "</ul>";      
                }
          }
//                  } 
        else {
          echo "<p>Please enter a search query</p>";
        }
      }
    ?>
  </body>
