<!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/navbar/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="image/photo.jpg">

    <title>Questionnaire</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!--link href="css/navbar.css" rel="stylesheet"-->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--script src="js/ie-emulation-modes-warning.js"></script><style type="text/css"></style-->
  </head>

  <body>

    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Questionnaire</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./index_files/index.html">Questions <span class="sr-only">(current)</span></a></li>
              <li><a href="#">Ranklist</a></li>
              <li><a href="#">Log Out</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
      


      <nav>
        <ul class="pager">
          <li class="next"><a href="index.html">Next <span aria-hidden="true">&rarr;</span></a></li>
        </ul>
      </nav>
      <div class="jumbotron">
     
        <h2>Enter the question below</h2>
        <form class="form" action="#" method="post">
          <textarea class="textarea form-control input-lg" rows="5" name="que"></textarea>
          <div class="rows">
            <div class="col-lg-6">
              <label class="">option 1 <input type="text" class="input-lg" name="opt1"></label>
            </div>
            <div class="col-lg-6">
              <label >option 2 <input type="text" class="input-lg" name="opt2"></label>
            </div>
          </div>
          <div class="rows">
            <div class="col-lg-6">
              <label class="">option 3 <input type="text" class="input-lg" name="opt3"></label>
            </div>
            <div class="col-lg-6">
              <label >option 4 <input type="text" class="input-lg" name="opt4"></label>
            </div>
          </div>

          <div class="rows">
            <div class="col-lg-3"></div>
            
              <label>Correct <input type="text" class="input-lg" name="optcr"></label>
           
            
          </div>
          
<!--#####################################################################################################################################


##########################################################################################################################################-->
        
        
        

      </div>
      <p>
          <a class="btn btn-lg btn-primary" href="#" role="button">Submit</a><br/>  
        </p>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <!--script src="js/bootstrap.min.js" ></script -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--script src="js/ie10-viewport-bug-workaround.js"--></script>
  

</body></html>
