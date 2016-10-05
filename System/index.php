<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootbox.min.js"></script>
    <script src="../js/index.js"></script>
    <script src="../js/jquery.dataTables.js"></script>
    <link href="../css/jumbotron-narrow.css" rel="stylesheet">
    <style>
  .modal-header, h4, .close {
      background-color: #800000;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>
  </head>
  <body>
      <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="user.php" id="login">User</a></li>
            <li role="presentation"><a href="count.php">Counter</a></li>
          </ul>
        </nav>
        <h3 class="text-muted" id="demo">CMO MEALS</h3>
      </div>

      <div class="jumbotron">
      <span class="label label-info">Choose your Hotel</span></p>
        <div class="btn-group-sm" data-toggle="buttons">
          <label class="btn btn-default">
          <input type="radio" name="options"  id="option1" autocomplete="off" > Los Laureles</label>
          <label class="btn btn-default">
          <input type="radio" name="options"  id="option2" autocomplete="off"> Angel Inn</label>
        </div>
        </p><span class="label label-info">Type your Room Number</span></p>
          <input type="text" id="txtroom" class="form-control" placeholder="Type Your Room Number">
          </p>
          <span><button class="btnmi  btn-primary btn-block" id="send" type="button">Send!</button></span>
          
      </div>

     
       <footer class="footer">
        <p>&copy; 2016 CMO, Casa matematica.</p>
      </footer>

    </div> <!-- /container -->
<!--
    <div class="container">

  <div class="modal fade" id="FormLog" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="txtusr" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="txtpwd" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" id="btnlogin" class="btn btn-danger btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
-->

 <div class="row" id='carga'>
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
  </body>
</html>