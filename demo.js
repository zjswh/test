$(function(){
    // $.ajax({
    //     url : "model.php",
    //     type : "post",
    //     success : function(response,status,xml){
    //         var json = $.parseJSON(response);
    //         var html  = '';
    //         $.each(json,function(index,value){
    //              html += "<tr><td>"+value.id+"</td><td>"+value.user+"</td><td>"+value.email+"</td></tr>";
    //         });
    //         $("#table").append(html)
    //     } 
    // });
    $("#user").click(function(){
        $.ajax({
            url: 'demoaction.php',
            type: 'post',
            data: {type: '1'},
            success: function(response,status,xml){
                var json = $.parseJSON(response);
                alert(json[0].user);
            }
        
        });
    });
    $("#email").click(function(){
        $.ajax({
            url: 'demoaction.php',
            type: 'post',
            data: {type: '2'},
            success: function(response,status,xml){
                var json = $.parseJSON(response);
                alert(json[0].email);
            }
        
        });
    });
    $("#send").click(function(){
        $("#send").ajaxSubmit({
            url: 'hah.php',
            type: 'post',
            success: function(response,status,xml){
                alert(response);
            }
        
        });
    });
    

});