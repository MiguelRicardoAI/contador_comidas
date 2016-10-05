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
    <script src="../js/jquery-1.12.0.min.js"></script>
    <script src="../js/jquery.dataTables.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap-select.js"></script>
    <script src="../js/bootbox.min.js"></script>
    <script src="../js/user.js"></script>
    <link href="../css/jumbotron-narrow.css" rel="stylesheet">
  </head>
  <body>
      <div class="container-fluid">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="index.php">Home</a></li>
            <li role="presentation" class="active"><a href="#">User</a></li>
            <li role="presentation"><a href="pdf.php">PDF</a></li>
            <li role="presentation"><a href="hotel.php">Hotel</a></li>
            <li role="presentation"><a href="count.php">Counter</a></li>
            <!--<li role="presentation"><a href="index.php" id="logout">Logout</a></li>-->
          </ul>
        </nav>
        <h3 class="text-muted">CMO MEALS</h3>
      </div><!--header-->
      <form class="navbar-form" role="search">
      <div class="col-md-7 col-md-offset-3">
        <select class="selectpicker" id="combo" data-style="btn-primary" data-size="5">
          <optgroup label="Search by">
          <option value="1">All</option>
          <option value="3">Workshop</option>
          <option value="2">Room</option>
          </optgroup>
        </select>
        <select class="selectpicker" id="cbowork" data-live-search="true" data-style="btn-primary" data-size="5">
          <optgroup label="Workshop" >
          <option value="16w5153">16w5153</option>
          <option value="16w5010">16w5010</option>
          <option value="16w5008">16w5008</option>
          <option value="16w5134">16w5134</option>
          <option value="16w5083">16w5083</option>
          <option value="16w5163">16w5163</option>
          <option value="16w5017">16w5017</option>
          <option value="16w5050">16w5050</option>
          <option value="16w5085">16w5085</option>
          <option value="16w5113">16w5113</option>
          <option value="16w5115">16w5115</option>
          <option value="16w5049">16w5049</option>
          <option value="16w5003">16w5003</option>
          <option value="16w5140">16w5140</option>
          <option value="16w5021">16w5021</option>
          <option value="16w5053">16w5053</option>
          <option value="16w5129">16w5129</option>
          <option value="16w5065">16w5065</option>
          <option value="16w5136">16w5136</option>
          <option value="16w5064">16w5064</option>
          <option value="16w5038">16w5038</option>
          <option value="16w5123">16w5123</option>
          <option value="16w5099">16w5099</option>
          <option value="16w5152">16w5152</option>
          <option value="16w5072">16w5072</option>
          <option value="16w5066">16w5066</option>
          </optgroup>
        </select>
        <input type="text" class="form-control" id="search" placeholder="Search" name="q">
        <input type="button" class="btn-primary btn-xsm" value="Load Table" id="load"/>
      </div>
      </form>
        <div class="col-md-10 col-md-offset-1">
            <table id="jsontable" class="table table-bordered table-hover" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Room</th>
                  <th>Hotel</th>
                  <th>Date</th>
                  <th>Week</th>
                  <th>Name</th>
                  <th>Last Name</th>
                  <th>Meal</th>
                  <th>Price</th>
                </tr>
              </thead>
            </table>
            <div class="col-md-3 col-md-offset-4">

            <table id="jsontable2" class="table table-bordered table-hover" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Total</th>
                </tr>
              </thead>
            </table>
             <table id="jsontable3" class="table table-bordered table-hover" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Numero</th>
                  <th>Comida</th>
                  <th>Costo</th>
                </tr>
              </thead>
            </table>
       
        </div><!--Col-->

        </div><!--Col-->

    </div> <!-- /container -->

     <footer class="footer">
        <p>&copy; 2016 CMO, Casa matematica.</p>
      </footer>
  </body>
</html>