<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Memories Events | OnePage Responsive Theme</title>
<!-- Bootstrap -->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
<!-- Respomsive slider -->
<link href="<?php echo base_url(); ?>css/responsive-slider.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/prettyPhoto.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/main.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/simple_pricing.css" rel="stylesheet">
<link rel="shortcut icon" href="<?php echo base_url(); ?>images/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>images/ico/apple-touch-icon-57-precomposed.png">
<script>
function validateEmail() {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	var x = document.forms["captcha-form"]["email"].value;
    if (filter.test(x)) {
        // document.forms["captcha-form"].submit();
    }
    else {
		$('.success_div').html('<h3>Please enter valid email address!</h3>');
        return false;
    }
	}
</script>
</head>