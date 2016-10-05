$(document).ready(function() {

  $("#logout").click(function(){
    document.location.href='../Actions/logout.php';
  });
    $('#jsontable').DataTable( {
         destroy: true,
    } );
   
var oTable = $('#jsontable').dataTable();  //Initialize the datatable
  $('#load').on('click',function(){
    var filtro=$("#combo").val(); //Guardar valor 
    if (filtro==1) {
      var user = $(this).attr('id');
    if(user != '') 
    { 
    $.ajax({
      url: '../Actions/almacen.php?tMovi=GETALL',
      dataType: 'json',
      success: function(s){
      console.log(s);
          oTable.fnClearTable();
            for(var i = 0; i < s.length; i++) {
                         oTable.fnAddData([
                  s[i][0],
                  s[i][1],
                  s[i][2],
                  s[i][3],
                  s[i][4],
                  s[i][5],
                  s[i][6],
                  s[i][7],
                  s[i][8]
                                           ]);
                    } // End For
      },
      error: function(e){
         bootbox.alert("Files Don´t exist!"); 
      }
      });
    }//Tabla 1
    $('#jsontable2').DataTable( {
         destroy: true,
        "paging":   false,
        "ordering": false,
        "info":     false,
        "searching":false
    } );
   var oTable2 = $('#jsontable2').dataTable();  //Initialize the datatable
    $.ajax({
      url: '../Actions/almacen.php?tMovi=GETALLTOT',
      dataType: 'json',
      success: function(s){
      console.log(s);
          oTable2.fnClearTable();
            for(var i = 0; i < s.length; i++) {
                         oTable2.fnAddData([
                  s[i][0]
                                           ]);                    
                    } // End For
                    
      },
      error: function(e){
         bootbox.alert("Registry Don´t exist!"); 
      }
      });//Tabla2
     $('#jsontable3').DataTable( {
       destroy: true,
        "paging":   false,
        "ordering": false,
        "info":     false,
        "searching":false
    } );
   var oTable3 = $('#jsontable3').dataTable();  //Initialize the datatable
    $.ajax({
      url: '../Actions/almacen.php?tMovi=GETALLORD',
      dataType: 'json',
      success: function(s){
      console.log(s);
          oTable3.fnClearTable();
            for(var i = 0; i < s.length; i++) {
                         oTable3.fnAddData([
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
    //tabla3
    } else if(filtro==2){
    var work=$("#cbowork").val();
    var clave=$("#search").val();
    var user = $(this).attr('id');
    if(user != '') 
    { 
    $.ajax({
      url: "../Actions/almacen.php?tMovi=GETCW&clave="+clave+'&work='+work,
      dataType: 'json',
      success: function(s){
      console.log(s);
          oTable.fnClearTable();
            for(var i = 0; i < s.length; i++) {
                         oTable.fnAddData([
                  s[i][0],
                  s[i][1],
                  s[i][2],
                  s[i][3],
                  s[i][4],
                  s[i][5],
                  s[i][6],
                  s[i][7],
                  s[i][8]
                                           ]);                    
                    } // End For
                    
      },
      error: function(e){
         bootbox.alert("Files Don´t Exist!");
      }
      });
    }//Tabla 1
    $('#jsontable2').DataTable( {
      destroy: true,
        "paging":   false,
        "ordering": false,
        "info":     false,
        "searching":false
    } );
    var oTable2 = $('#jsontable2').dataTable();  //Initialize the datatable
    $.ajax({
      url: "../Actions/almacen.php?tMovi=GETCWTOT&clave="+clave+'&work='+work,
      dataType: 'json',
      success: function(s){
      console.log(s);
          oTable2.fnClearTable();
            for(var i = 0; i < s.length; i++) {
                         oTable2.fnAddData([
                  s[i][0]
                                           ]);                    
                    } // End For
                    
      },
      error: function(e){
         bootbox.alert("Registry Don´t exist!"); 
      }
      });//Tabla2
    $('#jsontable3').DataTable( {
      destroy: true,
        "paging":   false,
        "ordering": false,
        "info":     false,
        "searching":false
    } );
   var oTable3 = $('#jsontable3').dataTable();  //Initialize the datatable
    $.ajax({
      url: "../Actions/almacen.php?tMovi=GETCWORD&clave="+clave+'&work='+work,
      dataType: 'json',
      success: function(s){
      console.log(s);
          oTable3.fnClearTable();
            for(var i = 0; i < s.length; i++) {
                         oTable3.fnAddData([
                  s[i][0],
                  s[i][1],
                  s[i][2]
                                           ]);                    
                    } // End For
                    
      },
      error: function(e){
         bootbox.alert("Registry Don´t exist!"); 
      }
      });//tabla3
    }else if(filtro ==3){
    var work=$("#cbowork").val();
    var user = $(this).attr('id');
    if(user != '') 
    { 
    $.ajax({
      url: "../Actions/almacen.php?tMovi=GETW&work="+work,
      dataType: 'json',
      success: function(s){
      console.log(s);
          oTable.fnClearTable();
            for(var i = 0; i < s.length; i++) {
                         oTable.fnAddData([
                  s[i][0],
                  s[i][1],
                  s[i][2],
                  s[i][3],
                  s[i][4],
                  s[i][5],
                  s[i][6],
                  s[i][7],
                  s[i][8]
                                           ]);                    
                    } // End For
                    
      },
      error: function(e){
         bootbox.alert("Files Don´t Exist!");
      }
      });
    }//tabla1
    $('#jsontable2').DataTable( {
         destroy: true,
        "paging":   false,
        "ordering": false,
        "info":     false,
        "searching":false
    } );
   var oTable2 = $('#jsontable2').dataTable();  //Initialize the datatable
    $.ajax({
      url: "../Actions/almacen.php?tMovi=GETWTOT&work="+work,
      dataType: 'json',
      success: function(s){
      console.log(s);
          oTable2.fnClearTable();
            for(var i = 0; i < s.length; i++) {
                         oTable2.fnAddData([
                  s[i][0]
                                           ]);                    
                    } // End For
                    
      },
      error: function(e){
         bootbox.alert("Registry Don´t exist!"); 
      }
      });
    //tabla2
     $('#jsontable3').DataTable( {
      destroy: true,
        "paging":   false,
        "ordering": false,
        "info":     false,
        "searching":false
    } );
   var oTable3 = $('#jsontable3').dataTable();  //Initialize the datatable
    $.ajax({
      url: "../Actions/almacen.php?tMovi=GETWORD&work="+work,
      dataType: 'json',
      success: function(s){
      console.log(s);
          oTable3.fnClearTable();
            for(var i = 0; i < s.length; i++) {
                         oTable3.fnAddData([
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
    //tabla3
    }else{
      alert("Filter not selected");
    };
  });


});