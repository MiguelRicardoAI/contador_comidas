$(document).ready(function() {

$('#cambiar').click(function(){
  var sem=$("#cbosem").val();
  $('#jsontable').DataTable( {
         destroy: true,
        "paging":   false,
        "ordering": false,
        "info":     false,
        "searching":false
    } );
   var oTable = $('#jsontable').dataTable();  //Initialize the datatable
    $.ajax({
      url: "../Actions/almacen.php?tMovi=THABS&sem="+sem,
      dataType: 'json',
      success: function(s){
      console.log(s);
          oTable.fnClearTable();
            for(var i = 0; i < s.length; i++) {
                         oTable.fnAddData([
                  s[i][0],
                  s[i][1],
                  s[i][2]
                                           ]);
                    } // End For
      },
      error: function(e){
         bootbox.alert("Registry Don´t exist!");
      }
      });

    $('#jsontable4').DataTable( {
         destroy: true,
        "paging":   false,
        "ordering": false,
        "info":     false,
        "searching":false
    } );
   var oTable4 = $('#jsontable4').dataTable();  //Initialize the datatable
    $.ajax({
      url: "../Actions/almacen.php?tMovi=TMEALSA&sem="+sem,
      dataType: 'json',
      success: function(s){
      console.log(s);
          oTable4.fnClearTable();
            for(var i = 0; i < s.length; i++) {
                         oTable4.fnAddData([
                  s[i][0],
                  s[i][1],
                  s[i][2]
                                           ]);
                    } // End For
      },
      error: function(e){
         bootbox.alert("Registry Don´t exist!");
      }
      });

     $('#jsontable5').DataTable( {
         destroy: true,
        "paging":   false,
        "ordering": false,
        "info":     false,
        "searching":false
    } );
   var oTable5 = $('#jsontable5').dataTable();  //Initialize the datatable
    $.ajax({
      url: "../Actions/almacen.php?tMovi=TOTANG&sem="+sem,
      dataType: 'json',
      success: function(s){
      console.log(s);
          oTable5.fnClearTable();
            for(var i = 0; i < s.length; i++) {
                         oTable5.fnAddData([
                  s[i][0],
                  s[i][1]
                                           ]);
                    } // End For
      },
      error: function(e){
         bootbox.alert("Registry Don´t exist!");
      }
      });
    $('#jsontable2').DataTable( {
         destroy: true,
        "paging":   false,
        "ordering": true,
        "info":     false,
        "searching":false
    } );
   var oTable1 = $('#jsontable2').dataTable();  //Initialize the datatable
    $.ajax({
      url: "../Actions/almacen.php?tMovi=LMEALS&sem="+sem,
      dataType: 'json',
      success: function(s){
      console.log(s);
          oTable1.fnClearTable();
            for(var i = 0; i < s.length; i++) {
                         oTable1.fnAddData([
                  s[i][0],
                  s[i][1],
                  s[i][2],
                  s[i][3],
                  s[i][4],
                  s[i][5],
                  s[i][6]
                                           ]);
                    } // End For
      },
      error: function(e){
         bootbox.alert("Registry Don´t exist!");
      }
      });

     $('#jsontable3').DataTable( {
         destroy: true,
        "paging":   false,
        "ordering": true,
        "info":     false,
        "searching":false
    } );
   var oTable2 = $('#jsontable3').dataTable();  //Initialize the datatable
    $.ajax({
      url: "../Actions/almacen.php?tMovi=AMEALS&sem="+sem,
      dataType: 'json',
      success: function(s){
      console.log(s);
          oTable2.fnClearTable();
            for(var i = 0; i < s.length; i++) {
                         oTable2.fnAddData([
                  s[i][0],
                  s[i][1],
                  s[i][2],
                  s[i][3],
                  s[i][4],
                  s[i][5],
                  s[i][6]
                                           ]);
                    } // End For
      },
      error: function(e){
         bootbox.alert("Registry Don´t exist!");
      }
      });
});

});