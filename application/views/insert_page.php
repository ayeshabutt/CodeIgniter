<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
	<title>Welcome to Memories Event Admin</title>

<body>

<div id="container">
	<h1>Add Page</h1>

	<div id="body">
	<table>
   	<?php echo validation_errors(); ?>
     <?php echo form_open('pages/insert_page'); ?>
    <tr>
    <td>Page Name:</td>
    <td><input type="text" name="name"></td>
    </tr>
    
    <tr>
    <td>Meta Keywords:</td>
    <td><input type="text" name="keywords"></td>
    </tr>
    
    <tr>
    <td>Meta Description:</td>
    <td><textarea name="description"cols="30" rows="4"></textarea></td>
    </tr>
    
    <tr>
    <td>Page Content:</td>
    <td><textarea name="content"cols="30" rows="4"></textarea></td>
    </tr>
    
    <tr>
    <td>Active:</td>
    <td>
    <select name="status"><option value="Yes">Yes</option>
    <option value="No">No</option></select></td>
    </tr>
    <tr>
    <td colspan="2">
    <center><input type="submit" name="insert" value="Insert"></center></td>
    </tr>
    </form>
    </table>
	</div>

</div>

</body>
</html>