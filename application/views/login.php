<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
	<title>Welcome to Memories Event Admin</title>

<body>

<div id="container">
	<h1>Welcome to Memories Event Admin!</h1>

	<div id="body">
	<table>
   	<?php echo validation_errors(); ?>
     <?php echo form_open('verifylogin'); ?>
    <tr>
    <td>Login:</td>
    <td><input type="text" name="username"></td>
    </tr>
    
    <tr>
    <td>Password:</td>
    <td><input type="password" name="password"></td>
    </tr>
    <tr>
    <td colspan="2">
    <center><input type="submit" name="login" value="Login"></center></td>
    </tr>
    </form>
    </table>
	</div>

</div>

</body>
</html>