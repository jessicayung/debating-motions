<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Debating Motions</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Debating Motions</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="search.php">Search<span class="sr-only">(current)</span></a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="mailto:jy357@cam.ac.uk">Contact</a></li>
          </ul>
          <!-- <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Search for Motions" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Search</button>
          </form>  -->
        </div><!--/.navbar-collapse -->
      </div>
    </nav>


    <!-- Main jumbotron for a primary marketing message or call to action -->
    
      <div class="container">
        <h1>Search for Motions</h1>
        <p>Search for motions by keyword, category, Chief Adjudicator, tournament, or timeframe. <a href="https://docs.google.com/spreadsheets/d/1qQlqFeJ3iYbzXYrLBMgbmT6LcJLj6JcG3LJyZSbkAJY/edit?usp=sharing">Access the motions spreadsheet directly here</a>. </p>

    <form action="search.php?go" method="get" id="searchform" >
                <div class="form-group, col-md-6">
                    <input name="q" class="form-control" type="text" placeholder="e.g. International Relations, WUDC, Cambridge IV">
                </div>
                <p><div class="form-group">
                <button type="submit" name = "submit" value=1 class="btn btn-success">Search</button>
                </div></p>

    </form>

  </div>
    <div class="container">
       <!-- <p> Your search query for <?php $_GET['q']; ?> returned results.</p> -->

    <?php 
      if(isset($_GET['submit'])) {
        if(!empty($_GET['q'])) {
//                    if(preg_match("^/[A-Za-za]+/", $_POST['name'])) {
          $servername = "localhost";
          $username = "root";
          $password = "root";
          $dbname = "debating";
          $search = $_GET['q'];
          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
          } 

          $sql = "SELECT Date, Round, Motion, Tournament FROM Motions WHERE 
             Motion LIKE '%" . $search . "%'
          OR Tournament LIKE '%" . $search . "%'
          OR Topic_Area_1 LIKE '%" . $search . "%'
          OR Topic_Area_2 LIKE '%" . $search . "%'
          OR CA_1 LIKE '%" . $search . "%'
          OR CA_2 LIKE '%" . $search . "%'
          OR CA_3 LIKE '%" . $search . "%'
          OR CA_4 LIKE '%" . $search . "%'
          OR CA_5 LIKE '%" . $search . "%'
          OR CA_6 LIKE '%" . $search . "%'
          OR CA_7 LIKE '%" . $search . "%'
          ORDER BY Date DESC, RoundCode ASC
          ";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
               echo "<table class=\"table table-striped\"><tr>
               <th>Date</th>
               <th>Tournament</th>
               <th>Round</th>
               <th>Motion</th></tr>";
               // output data of each row
               while($row = $result->fetch_assoc()) {
                   echo "<tr><td>" . 
                   $row["Date"]. "</td><td>" . 
                   $row["Tournament"]. "</td><td>" . 
                   $row["Round"]. "</td><td>" . 
                   $row["Motion"]. "</td></tr>";
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
       <hr>

      <footer>
        <p>&copy; 2015 Jessica Yung.</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>

</html>
