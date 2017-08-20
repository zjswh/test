$(function(){
    $('#check').click(function(){
        $.ajax({
            url: 'hah.php',
            type: 'POST',
            data: {'id': 12},
        })
        .done(function(response,status,text) {
            var json = $.parseJSON(response);
            alert(json[2]);
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
        
    });
});