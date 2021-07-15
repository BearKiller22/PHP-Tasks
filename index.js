$(document).ready(function(){
    $('.form').submit(function(e){
        param = new Object;
        param.number = $(this).find('input[name="number"]').val();
        param.method = $(this).attr('method-id');

        $.ajax({
            type:'POST',
            url:'main.php',
            data:param,
            success: function(data){
                var tmpArray = JSON.parse(data);
                console.log(JSON.stringify(tmpArray.data));
                var outputId = param.method;
                $('.output[method-id="'+outputId+'"]').html(tmpArray.data);
            },
            error: function(data){
                console.log(data);
            }
        })
        e.preventDefault();
    })
});