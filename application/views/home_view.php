<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <script type="text/javascript">
    function confirmDelete() {
        return confirm('Are you sure you want to delete this page?');
    }
</script>
   <title>Welcome Admin home</title>
 </head>
 <body>
   <h1>Home</h1>
   <h2>Welcome <?php echo $username; ?>!</h2>
   <div>
   <a href="home/logout">Logout</a>
   </div>
   <table>
   <?php echo form_open('pages'); ?>
   <input type="submit" name="add_page" value="Add page" />
   <?php echo form_close(); ?>
   </table>
   <table>
   <tr>
   <th>No.</th>
   <th>Name</th>
   <th>Meta Keywords</th>
   <th colspan="2">action</th>  
   </tr>
   <?php $count = 1;
    foreach($query as $row): ?>
	<tr> 
	<td><?php echo $count++ ;?></td>
    <td><?php echo $row->name; ?></td>
    <td><?php echo $row->meta_keywords; ?></td>
    <td><a href="<?php echo base_url() . "index.php/pages/edit_page?id=" . $row->id; ?>"><button>EDIT</button></a></td><TD><a href="<?php echo base_url() . "index.php/pages/delete_page?id=" . $row->id; ?>"><button onclick="return confirmDelete();">Delete</button></a></td>
   
    </tr>
    <?php endforeach; ?>
   </table>
 </body>
</html>