<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-select.css" rel="stylesheet">
    <script src="../js/jquery-1.10.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.dataTables.js"></script>
    <script src="../js/bootstrap-select.js"></script>
    <script src="../js/bootbox.min.js"></script>
    <script src="../js/count.js"></script>
    <link href="../css/jumbotron-narrow.css" rel="stylesheet">
  </head>
  <body>
      <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="index.php">Home</a></li>
            <li role="presentation"><a href="user.php">User</a></li>
            <li role="presentation"><a href="pdf.php">PDF</a></li>
            <li role="presentation"><a href="hotel.php">Hotel</a></li>
            <li role="presentation" class="active"><a href="#">Counter</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">CMO MEALS</h3>
      </div><!--header-->
       <div class="row">
       <div class="col-md-5 col-md-offset-4">
       <div class="btn-group-sm" data-toggle="buttons">
          <input type="button" class="btn-primary  btn-sm" value="Los Laureles" id="option1"/>
          <input type="button" class="btn-primary  btn-sm" value="Angel Inn" id="option2"/>
          </p>
       </div>
       </div>
        <div class="col-md-10 col-md-offset-1">
          <div class="panel panel-primary">
            <table id="jsontable" class="table table-bordered table-hover" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Number</th>
                  <th>Type Meal</th>
                </tr>
              </thead>
            </table>
          </div>
        </div><!--Col-->
      </div><!--Row-->
       <footer class="footer">
        <p>&copy; 2016 CMO, Casa matematica.</p>
      </footer>
    </div> <!-- /container -->
  </body>
</html>