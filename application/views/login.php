<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>BuziApp</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #000;
        color:#fff;
		margin: 40px;
		font: 12px normal Helvetica, Arial, sans-serif;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#container{
        width:756px;
        margin: 10px auto;
        border: 1px solid #D0D0D0;
        -webkit-box-shadow: 0 0 8px #D0D0D0; 
	}
    #display-pin{width:726px!important;border:1px solid #fff;color:#fff;padding:10px 0 0 0;font-size:60px;
    margin:20px auto 10px auto;cursor:default!important;height:79px;}
    #display-pin:hover{background:#000!important;}
    #container div{border:1px solid #fff;width:200px;text-align:center;cursor:pointer;}
    
    .pin-number,.pin-buttons{padding:10px;font-size:20px;font-weight:bold;margin:15px;float:left;}
    .pin-number:hover,.pin-buttons:hover{background:#fff;color:#000;}
    .clearfix{clear:both;border:0!important;background:#000!important;}
	</style>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <!--
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    -->
     <script language="javascript" type="text/javascript">
        $(function(){
            
            var pw = '';            
            var test_pw = '12351';
            
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
                pw = $('#display-pin').html();
                
                if(test_pw == pw){
                    $('#display-pin').html('<span style="color:#3ADF00;">Login Successful!</span>');
                }else{
                     $('#display-pin').html('<span style="color:#FF0000;">Please Try Again</span>');
                     setTimeout(function(){
                        $('#display-pin').html('');
                     },2000);
                     
                }
                
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
    </script>
</head>
<body>

	<div id="container">
        <div id="display-pin"></div>
        
	    <div id="pin1" class="pin-number">1</div>
        <div id="pin2" class="pin-number">2</div>
        <div id="pin3" class="pin-number">3</div>
        <div class="clearfix"></div>
        <div id="pin4" class="pin-number">4</div>
        <div id="pin5" class="pin-number">5</div>
        <div id="pin6" class="pin-number">6</div>
        <div class="clearfix"></div>
        <div id="pin7" class="pin-number">7</div>
        <div id="pin8" class="pin-number">8</div>
        <div id="pin9" class="pin-number">9</div>
        <div class="clearfix"></div>
        <div id="enter" class="pin-buttons">ENTER</div>
        <div id="delete" class="pin-buttons">DELETE</div>
        <div id="reset" class="pin-buttons">RESET</div>
        <div class="clearfix"></div>

	</div>
</body>
</html>