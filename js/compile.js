jQuery(document).ready(function($) {
    $('#code').submit( function(){
        var editor = ace.edit("editor");

        var source = editor.getValue();
        $('#code input[name=source]').val(source);
        var data = $(this).serialize();
                
        if( source == '' ) {
            alert( 'No source code provided');
            return false;
        }

        $(this).append('<div class="loading"> Processing...</div>');
        $('#response').hide();
        
        $.ajax({
            type: 'post',
            url: 'process.php',
            dataType: 'json',
            data: data + '&process=1',
            cache: false,
            success: function(response){
                $('.loading').remove();
                $('.cmpinfo').remove();
                $('#response').show(1000);
                //alert(response);
                console.log(response.raw);
                if( response.status == 'success' ) {
                    $('.meta').text( response.meta );
                    $('.output pre').html(response.output);

                    if( response.cmpinfo ) {
                        $('.cmpinfo').remove();
                        $('.meta').after('<div class="cmpinfo"></div>');
                        $('.cmpinfo').html('<strong>Compiler Info: </strong> <br><br>' + response.cmpinfo );
                    }
                    
                } else {
                    //$('.output').html('<pre>' + response + '</pre>');
                    alert( response.output );
                }
                //alert( response.msg );
            }
        });
        
        return false;
    });
});
