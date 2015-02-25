<h2>Please Login to continue</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('login/account'); ?>

    <label for="username">Username</label>
    <input type="text" name="username" /> <br>

    <label for="password">Password</label>
    <input type="password" name="password" /> <br>

    <input type="submit" name="submit" value="Login" />
	
	<input type="text" name="kodok" value="confirm" />
	
</form>