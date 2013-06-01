        $(function(){
            
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
            
            //check logged in
             $.get('/login/check',function(data){
                console.log(data);
                if(data==1){
                    $.get('/dashboard',function(data){
                        //console.log(data);
                        $('#container').html(data);
                    });
                }else{
                    
                    $('.pin-number').each(function(){
                        $(this).click(function(){
                            var id = $(this).attr('id');
                            var value = id.substring(3);
                            //alert(value);
                            var display_pin = $('#display-pin').html();
                            $('#display-pin').html(display_pin+value);
                        });
                    });
            
                    $('#enter').click(function(){
                        var password = $('#display-pin').html();
                        
                        $.post('/login/auth', {password: password}, function(data) {
                            //$('.result').html(data);
                            
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
                            console.log(data);
                            
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
                            
                        }
                    });
            
            
        });
        //alert('hello Robert');