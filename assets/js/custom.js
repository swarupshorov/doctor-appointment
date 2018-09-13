$(document).ready(function () {

    $("#city-id").change(function (event) {
        event.preventDefault();
        var id = $("#city-id").val();
        if(id>0){
            $.ajax({
                type:"post",
                url:url+"Appointment/getChamberList",
                data:{id:id},
                success:function (res) {
                    $('.response-chamber').html(res);                 
                }
            })
        }
    });
    $(document).on('change','#chamber-id',function(){
        var id = $("#chamber-id").val();
        if(id!=''){
            $.ajax({
                type:"post",
                url:url+"Appointment/getDoctorList",
                data:{id:id},
                success:function (res) {
                    $('.response-doctor').html(res);                 
                }
            })
        }
    });

    $("#chamber-id").change(function (event) {
        event.preventDefault();
        var id = $("#chamber-id").val();
        if(id>0){
            $.ajax({
                type:"post",
                url:url+"Appointment/getDoctorList",
                data:{id:id},
                success:function (res) {
                    $('.response-chamber').html(res);                 
                }
            })
        }
    });

    $(document).on('click','.add_field',function(){
        var field = '<input type="text" placeholder="Education" name="[education][]"><span class="icon-trash bigger-120 field-remove"></span>';
        $('.education-f-add').append(field);
    });
    $(document).on('click','.field-remove',function(){
        $(this).parent().remove();
    });
})


