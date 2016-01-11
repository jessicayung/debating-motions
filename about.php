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
        <h1>About</h1>
        <p>Search for motions by keyword, category, Chief Adjudicator, tournament, or timeframe. <a href="https://docs.google.com/spreadsheets/d/1qQlqFeJ3iYbzXYrLBMgbmT6LcJLj6JcG3LJyZSbkAJY/edit?usp=sharing">Access the motions spreadsheet directly here</a>. </p>

    
      </div>
      
      <div class="container">
        <h2>Motion Categories</h2>
        <p><b>General:</b></p>
        <div class="row">
          <div class="col-md-4">
            <ul>
              <li>Art and Culture</li>
              <li>Business</li>
              <li>Criminal Justice System</li>
              <li>Development</li>
              <li>Economics</li>
              <li>Education</li>
              <li>Environment</li>
              <li>Family</li>
              <li>Feminism</li>
              <li>International Relations</li>
              <li>LGBT+</li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul>
              <li>Media</li>
              <li>Medical Ethics</li>
              <li>Minority Communities</li>
              <li>Morality</li>
              <li>Politics</li>
              <li>Religion</li>
              <li>Science and Technology</li>
              <li>Security, War and Military</li>
              <li>Social Policy</li>
              <li>Sports</li>
              <li>Terrorism</li>
            </ul>
          </div>
        </div>  
          <p>The aim of these categories is to give an average-intelligent-voter view of what areas the debate is primarily about. I have tried to include topics that are neither too general nor too specific. 'Rights and Freedoms' is on the edge of too general, but the motions in mind for that could be focused on e.g. privacy or freedom of speech.</p>
          <p>Each motion may be included under one or two of these umbrellas. The aim of these categories is not to provide a comprehensive reading of the motion, i.e. what areas it could possibly cover, else they would be useless for filtering. E.g. I could probably tag almost every single motion with 'Economics', but then that would not help people searching for Economics motions to practice with. </p>
          <p>Note again that these are not the same as clashes. E.g. Artificial Intelligence / manipulation of genomes would both fall under Science and Technology as opposed to 'whether humans should meddle with tech'. Also, tagging clashes would be reading too much into the debate for my liking.</p>
          <p><b>Current</b>:
            EU (Sub: Eurozone Crisis)
            Islamic State (ISIS)
            Refugee Crisis
            US Politics / Trump
          </p>

          <p><b>Clashes</b>:
            Individual vs the State
            Individual vs Collective
            Present vs Future Generations
            Rights of the Individual
            Freedom of Expression / Rights
            Offloading of Responsibility
            Inequality and Redistribution
            Fairness: Minorities, Oppressed Groups
            Means vs Ends
            Definition of Happiness and Purpose, Human Experience
            Reparations (Moral, owing)
            Imposing standards
          </p>

    
      </div>
      

      <div class="container">
        <h2>Development Notes</h2>
        <table class="table table-striped">
          <tr><th>Date</th><th>Notes<th></tr>
          
          <tr><td>6 Jan 2016</td><td><ul>
            <li>Added form to submit motions directly to database instead of using Google Form.</li>
            <li>Porting to Laravel.</li>
          </ul></td></tr>

          <tr><td>13-15 Dec 2015</td><td><ul>
            <li>You can search for motions in the database (only one term at a time, mind, no ORs just yet.)</li>
            <li>Motions are displayed in a tabular format, with columns: Date, Tournament, Round, Motion.</li>
            <li>Homepage with recent motions and search field, search page.</li>
            <li>Full list of motions in 2015 (that are included in the database)</li>
            <li>About page with Motion Categories, Development Notes.</li>
            <li>Basic database and site setup on local server.</li>
            <li>Copy of temporary motion database also on <a href="https://docs.google.com/spreadsheets/d/1qQlqFeJ3iYbzXYrLBMgbmT6LcJLj6JcG3LJyZSbkAJY/edit?usp=sharing">Google Sheets</a>.</li>
          </ul></td></tr>

        </table>
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
  </body>

</html>
