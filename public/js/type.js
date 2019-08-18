$(document).ready(function(){
    $("#type").change(function(){
        var val =$("#type").val();
        if(val == "2"){
            $("#stud").removeAttr("disabled");
            $("#tech").attr('disabled', 'disabled');

        }
     
        if(val == "1"){
            $("#tech").removeAttr("disabled");
            $("#stud").attr('disabled', 'disabled');
     
        }
     
        if(val == "0"){
            $("#tech").attr('disabled', 'disabled');
            $("#stud").attr('disabled', 'disabled');
     
        }
     
    });
  });