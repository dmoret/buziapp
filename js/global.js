$(function(){
    
    //debug toolbar
    $('#clear_sessions').click(function(){
        $.get('/debug/clear_sessions',function(data){
            $('#debug_message').html(data);
        });
    });
    
    $('#reload_page').click(function(){
        document.location.reload(true);        
    });
    
    //loader
	$("body").on({
		ajaxStart: function() { 
			//$.fancybox.hideActivity();
			$('.ajax-loader').fadeIn(300); 
		},
		ajaxStop: function() {
		//	$.fancybox.hideActivity(); 
			$('.ajax-loader').fadeOut(300); 
		}    
	});
    

    $('.pin-number-btn button').each(function(){
        $(this).click(function(){
            var id = $(this).attr('id');
            var value = id.substring(3);
            var display_pin = $('#display-pin').html();
            $('#display-pin').html(display_pin+value);
        });
    });

    $('#enter').click(function(){
        var password = $('#display-pin').html();
        console.log('password: '+password);
        $.post('/login/auth', {password: password}, function(data) {
            //$('.result').html(data);
            console.log('data: '+data);
            if(data==1){
                $('#display-pin').html('<span style="color:#3ADF00;">Login Successful!</span>');
                setTimeout(function(){
                    $.get('/dashboard',function(data){
                        console.log(data);
                        $('#container').html(data);
                    });
                    
                },2000); 
            }else{
                $('#display-pin').html('<span style="color:#FF0000;">Please Try Again</span>');
                
                setTimeout(function(){
                    $('#display-pin').html('');
                },800); 
            }
            //console.log(data);
            
        });

    });

    $('#delete').click(function(){
        var value = $('#display-pin').html();
        value = value.substring(0,-1);
        $('#display-pin').html(value);
    });
    
    $('#reset').click(function(){
        $('#display-pin').html('');
    });

    
});
//alert('hello Robert');