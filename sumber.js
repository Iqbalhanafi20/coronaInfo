
$(document).ready(function(){
    $.ajax({
        type : "POST",
        url  : "sumber.php",
        data : {
            tipe:"dataindo"
        },
        success : function(data){
            alert(data);
        }
    });
});