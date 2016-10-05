$(document).ready(function(){

var vh="";

bootbox.dialog({
  message: "Verificación Recepción",
  title: "¿En que hotel estás?",
  buttons: {
    select1: {
      label: "Los Laureles",
      className: "btn-primary",
      callback: function() {
        document.getElementById("demo").innerHTML = 'Los Laureles';
        vh="Los Laureles";
        $('#jsontable').DataTable( {
         destroy: true,
        "paging":   false,
        "ordering": false,
        "info":     false,
        "searching":false
        } );
        var oTable = $('#jsontable').dataTable();  //Initialize the datatable
        $.ajax({
        url: "../Actions/almacen.php?tMovi=COUNTERGL",
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
      }
    },
    select2: {
      label: "Angel Inn",
      className: "btn-primary",
      callback: function() {
        document.getElementById("demo").innerHTML = 'Angel Inn';
        vh="Angel Inn";
$('#jsontable').DataTable( {
         destroy: true,
        "paging":   false,
        "ordering": false,
        "info":     false,
        "searching":false
    } );
   var oTable = $('#jsontable').dataTable();  //Initialize the datatable
    $.ajax({
      url: "../Actions/almacen.php?tMovi=COUNTERA&hotel="+vh,
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
      }
    }
  }
});



    $('#send').click(function(){
      var room=$("#txtroom").val();
      var hotel="";
      if ($("#option1").is(':checked')){
        hotel="Los Laureles";
      }else if($("#option2").is(':checked')){
        hotel="Angel Inn";
      }
      if (vh==""){
		bootbox.alert("Please reload the page and select the HOTEL!");
		}else if(room==""){
      bootbox.alert("Please Type your ROOM!");
    }else if(hotel==""){
      bootbox.alert("Please Select your HOTEL");
    }else{
      $.ajax({
        type:"POST",
        url:"../Actions/person.php?tMovi=CHEKAR",
        data:'cveroom='+room+
        '&cvehotel='+hotel+
        '&cvevh='+vh,
        success:function(msg){
          $("#txtroom").val("");
          if (msg==1) {
            bootbox.alert("Registry Done!");
          }
          if(msg==2){
            bootbox.alert("Registry Repeated!");
          }
          if(msg==3){
            bootbox.alert("Registry Doesn't Exist!");
          }
        },
        error: function(msg){
          alert("Error de Servidor");
        }
      });
    }
    });
/*
$("#btnlogin").click(function(){
		var user=$("#txtusr").val();
			psw=$("#txtpwd").val();
		if((user=='')||(psw=='')){
		}else{
			$.ajax({
				type: "POST",
				url:"../Actions/login.php",
				data: 'user='+user+'&psw='+psw+'&tMovi=LOGEAR',
				success: function(msg){
					if(msg==0){
							document.location.href='index.php';
					}
					if(msg==2){
							document.location.href='index.php';	
					}
					if(msg==3){
						
							document.location.href='index.php';
					}
					if(msg==1){
							document.location.href='user.php'					
					};
				}
			});
		}
	});
*/





});