$(document).ready(function() {

  $('#jsontable').DataTable( {
         destroy: true,
        "paging":   false,
        "ordering": false,
        "info":     false,
        "searching":false
    } );
   var oTable = $('#jsontable').dataTable();  //Initialize the datatable
    $.ajax({
      url: "../Actions/almacen.php?tMovi=COUNTERG",
      dataType: 'json',
      success: function(s){
      console.log(s);
          oTable.fnClearTable();
            for(var i = 0; i < s.length; i++) {
                         oTable.fnAddData([
                  s[i][0],
                  s[i][1]
                                           ]);
                    } // End For
      },
      error: function(e){
         bootbox.alert("Registry Don´t exist!");
      }
      });


  $("#option1").click(function(){
    $('#jsontable').DataTable( {
         destroy: true,
        "paging":   false,
        "ordering": false,
        "info":     false,
        "searching":false
    } );
   var oTable = $('#jsontable').dataTable();  //Initialize the datatable
   var hotel="Los Laureles";
    $.ajax({
      url: "../Actions/almacen.php?tMovi=COUNTER&hotel="+hotel,
      dataType: 'json',
      success: function(s){
      console.log(s);
          oTable.fnClearTable();
            for(var i = 0; i < s.length; i++) {
                         oTable.fnAddData([
                  s[i][0],
                  s[i][1]
                                           ]);                    
                    } // End For
                    
      },
      error: function(e){
         bootbox.alert("Registry Don´t exist!"); 
      }
      });
  });

  $("#option2").click(function(){
    $('#jsontable').DataTable( {
         destroy: true,
        "paging":   false,
        "ordering": false,
        "info":     false,
        "searching":false
    } );
   var oTable = $('#jsontable').dataTable();  //Initialize the datatable
   var hotel="Angel Inn";
    $.ajax({
      url: "../Actions/almacen.php?tMovi=COUNTER&hotel="+hotel,
      dataType: 'json',
      success: function(s){
      console.log(s);
          oTable.fnClearTable();
            for(var i = 0; i < s.length; i++) {
                         oTable.fnAddData([
                  s[i][0],
                  s[i][1]
                                           ]);
                    } // End For
      },
      error: function(e){
         bootbox.alert("Registry Don´t exist!");
      }
      });
  });
});