$(document).ready(function() {

	$('#pdf').click(function(){
    var hotel=$("#hotel").val(); //Guardar valor 
        if (hotel==1) {
            hotel="Angel Inn";
        } else{
            hotel="Los Laureles";
        };
    var work=$("#cbowork").val(); //Guardar valor   
    var filtro=$("#combo").val(); //Guardar valor 
    if (filtro==1) {
    	//all
    	window.open( "../Actions/almacen.php?tMovi=REPORTEG");
    } else if(filtro==2){
    	//hotel
        window.open( "../Actions/almacen.php?tMovi=REPORTEH&hotel="+hotel);
    }else if(filtro==3){
    	//workshop
    	window.open( "../Actions/almacen.php?tMovi=REPORTEHW&hotel="+hotel+'&work='+work);
    }else if(filtro==4){
    	//room
    	var room=$("#search").val(); //Guardar valor 
        window.open( "../Actions/almacen.php?tMovi=REPORTEHWC&hotel="+hotel+'&room='+room+'&work='+work);
    };
    });


});