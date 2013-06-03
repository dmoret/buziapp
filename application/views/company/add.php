<div class="well">
    <form name="add-company-user" method="post">
      <fieldset>
        <legend>Add Company User</legend>
        <input name="fname" type="text" placeholder="First Name" /><br />
        <input name="lname" type="text" placeholder="Last Name" /><br />
        <input name="email" type="text" placeholder="Email" /><br />
        <input name="password" type="password" placeholder="Password" /><br />
        <input name="title" type="text" placeholder="Title" /><br />
        <select name="access">
            <?php echo $access_options_html;?>
        </select><br />
        <button type="submit" class="btn">Submit</button>
      </fieldset>
    </form>
</div>