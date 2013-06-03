<div class="well well-dark-grey" style="margin:0 20px 20px 20px;">
    
   
        <div class="row-fluid">
        
            <div class="span6 fs18">
                Company Users
            </div>
            <div class="span6" align="right">
                <button id="add_user" class="btn btn-small btn-primary" type="button">Add User</button>
            </div>
        </div>
  

    <?php 
     //echo '<pre>'; var_dump($table); echo '</pre>';
     echo $table['users'];
    ?>
    
    <script>
    $(function(){
        $('#add_user').click(function(){
            document.location.href = '/company/add';
        });
        <?php echo $table['js']; ?>
    });
    </script>
</div>