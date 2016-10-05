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
    <script src="../js/hotel.js"></script>
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
            <li role="presentation" class="active"><a href="#">hotel</a></li>
            <li role="presentation"><a href="count.php">Counter</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">CMO MEALS</h3>
      </div><!--header-->
       <div class="row">
       <div class="col-md-5 col-md-offset-4">
       <label>Workshop </label>
       <select class="selectpicker" id="cbosem" data-live-search="true" data-style="btn-primary" data-size="5">
          <optgroup label="Semana" >
          <option value="18">16w5153</option>
          <option value="19">16w5010</option>
          <option value="20">16w5008</option>
          <option value="21">16w5134</option>
          <option value="22">16w5083</option>
          <option value="23">16w5163</option>
          <option value="24">16w5017</option>
          <option value="25">16w5050</option>
          <option value="26">16w5085</option>
          <option value="27">16w5113</option>
          <option value="28">16w5115</option>
          <option value="29">16w5049</option>
          <option value="30">16w5003</option>
          <option value="31">16w5140</option>
          <option value="32">16w5021</option>
          <option value="33">16w5053</option>
          <option value="34">16w5129</option>
          <option value="35">16w5065</option>
          <option value="36">16w5136</option>
          <option value="37">16w5064</option>
          <option value="38">16w5038</option>
          <option value="39">16w5123</option>
          <option value="40">16w5099</option>
          <option value="41">16w5152</option>
          <option value="42">16w5072</option>
          <option value="43">16w5066</option>
          </optgroup>
        </select>
        <input type="button" class="btn-primary btn-sm" value="Cargar datos" id="cambiar"/></p>
       </div>
        <div class="col-md-4">
          <div class="panel panel-primary">
          <label>Hotel Angel Inn</label>
            <table id="jsontable" class="table table-bordered table-hover" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Extras</th>
                  <th>Costo Unitario</th>
                  <th>Costo Total (x5 Días)</th>
                </tr>
              </thead>
            </table>
             <table id="jsontable4" class="table table-bordered table-hover" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Comidas</th>
                  <th>Costo</th>
                  <th>Costo Total (x5 Días)</th>
                </tr>
              </thead>
            </table>
            <table id="jsontable5" class="table table-bordered table-hover" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Gran total</th>
                </tr>
              </thead>
            </table>
          </div>
          </div>
          <div class="col-md-4">
          <div class="panel panel-primary">
          <label>Hotel Los Laureles</label>
            <table id="jsontable6" class="table table-bordered table-hover" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Extras</th>
                  <th>Costo Unitario</th>
                  <th>Costo Total (x5 Días)</th>
                </tr>
              </thead>
            </table>
            <table id="jsontable7" class="table table-bordered table-hover" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Gran total</th>
                </tr>
              </thead>
            </table>
          </div>
          </div>
          </div>
          </div>
        </div><!--Col-->
        <div class="col-md-10 col-md-offset-1">
          <div class="panel panel-primary">
          <label>Comida Los Laureles</label>
            <table id="jsontable2" class="table table-bordered table-hover" cellspacing="0" width="60%">
              <thead>
                <tr>
                  <th>Dia</th>
                  <th>Tipo</th>
                  <th>Comidas total</th>
                  <th>Costo total</th>
                  <th>Pagadas</th>
                  <th>Extra</th>
                  <th>Subtotal</th>
                </tr>
              </thead>
            </table>
            <label>Desayunos Angel Inn</label>
            <table id="jsontable3" class="table table-bordered table-hover" cellspacing="0" width="60%">
              <thead>
                <tr>
                  <th>Dia</th>
                  <th>Tipo</th>
                  <th>Comidas total</th>
                  <th>Costo total</th>
                  <th>Pagadas</th>
                  <th>Extra</th>
                  <th>Subtotal</th>
                </tr>
              </thead>
            </table>
        </div><!--Col-->
      </div><!--Row-->
       <footer class="footer">
        <p>&copy; 2016 CMO, Casa matematica.</p>
      </footer>
    </div> <!-- /container -->
  </body>
</html>