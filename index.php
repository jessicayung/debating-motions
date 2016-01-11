<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Debating Motions</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

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
    
    <!-- jQuery header, still flashes
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    
    <script> 
    $(function(){
      $("#header").load("header.html"); 
      $("#footer").load("footer.html"); 
    });
    </script> 
    -->

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
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, motions!</h1>
        <p>Search for motions by keyword, category, Chief Adjudicator, tournament, or timeframe. <a href="https://docs.google.com/spreadsheets/d/1qQlqFeJ3iYbzXYrLBMgbmT6LcJLj6JcG3LJyZSbkAJY/edit?usp=sharing">Access the motions spreadsheet directly here</a>. </p>
          <form action="search.php" method="get" id="search-motions" >
            <div class="form-group, col-md-6">
                <input class="form-control" type="text" name="q" placeholder="e.g. International Relations, WUDC, Cambridge IV">
            </div>
            <p><div class="form-group">
            <button type="submit" name="submit" value=1 class="btn btn-success">Search</button>
            </div></p>
          </form>
          <!-- <a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a> -->
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Want to contribute?</h2>
          <p>We need <b>your help</b> to make sure these motions are comprehensive and up-to-date. <a href="https://docs.google.com/forms/d/14v5RuG6NHjDySrLN8zJC97-e761sRBivhOoPxjt0K6I/viewform?c=0&w=1">Tell us about motions from tournaments here.</a> Or <a href="mailto:jy357@cam.ac.uk">contact me directly</a> if you have other questions / suggestions. Thanks a lot!</p>
        </div>
        <div class="col-md-4">
          <h2>Our Aim</h2>
          <p> No more clicking through a bajillion sites or blog posts to find motions on feminism - we can give you a list of quality recent ones. You can even <a href="#">generate a random motion from a category for debating practice.</a> </p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Full list of <a href="#">categories</a> and <a href="#">tournaments</a> available.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div> <!-- /container -->

      <div class="container">
        <div class="row">

          <h2> Recent Motions </h2>

          <?php 
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

            $sql = "SELECT Round, Date, Motion, Tournament FROM Motions ORDER BY Date DESC, RoundCode ASC LIMIT 25
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
                     $row["Round"]. "</td><td>". 
                     $row["Motion"]. "</td></tr>";
                 }
                 echo "</table>";
            } else {
                 echo "0 results";
            }

            $conn->close();
        
      ?>
      <p><a href="2015-full.php"> Show Full List for 2015</a></p>
      </div> <!-- /row -->
      </div> <!-- /container -->

      <hr>

      <footer>
        <p>&copy; 2015 Jessica Yung.</p>
      </footer>
    </div>

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
