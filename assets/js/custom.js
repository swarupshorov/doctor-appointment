$(document).ready(function () {
    $("#city-id").change(function (event) {
        event.preventDefault();
        var id = $("#city-id").val();
        if(id>0){
            $.ajax({
                type:"post",
                url:url+"Appointment/getDocList",
                dataType:'json',
                data:{id:id},
                success:function (res) {
                    
                }
            })
        }
    });
})