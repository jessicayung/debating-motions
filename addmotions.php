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

    <title>Add Motions</title>

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
        <h1>Add Motions</h1>
        <p>Add your motions to our database here.</p>

    <form action="#" method="#" id="addmotions" >
                <div class="form-group">
                    <h3>Tournament Information</h3>
                    <table class="table table-striped">
                      <tr><td>Tournament</td><td><input name="Tournament" placeholder="Tournament Name" type="text" class="form-control" required></td></tr>
                      <tr><td>Date</td><td><input name="Date" type="date" class="form-control"></td></tr>
                      <tr><td>Number of In-Rounds</td><td><input name="In-Rounds" type="number" max="25" class="form-control"></td></tr>
                      <tr><td>CAs</td><td><textarea name="CAs" placeholder="Please enter one CA name on each row." class="form-control"></textarea></td></tr>
                      <tr><td>Circuit</td><td><select name="Circuit" class="form-control">
                        <option value="IoNA">IoNA</option>
                        <option value="NA-Canada">North America and Canada</option>
                        <option value="Europe">Europe</option>
                        <option value="Australia">Australia</option>
                        <option value="Asia">Asia</option>
                      </select></td></tr>
                    </table>

                    <h3>Motions</h3>
                    <table class="table table-striped">
                      <tr><td>Round</td><td>Motion</td><td>Infoslide</td></tr>
                      <tr><td>1</td><td><input name="Motion" type="text" class="form-control" required></td><td><input name="Infoslide" type="text" class="form-control"></td></tr>
                    </table>
                    
                    <button type="submit" name = "submit" value=1 class="btn btn-success">Submit</button>
                </div>

    </form>

  </div>
    <div class="container">
       <!-- <p> Your search query for <?php $_GET['q']; ?> returned results.</p> -->

    
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
    
    <script>
      $(document).ready(function(){
          $("#hide").click(function(){
              $("table#optional").hide();
          });
          $("#show").click(function(){
              $("table#optional").show();
          });
      });
    </script>

  </body>

</html>
