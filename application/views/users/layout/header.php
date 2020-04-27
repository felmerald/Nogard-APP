<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'public/css/bootstrap.min.css' ;?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'public/css/style.css' ;?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="<?php echo base_url().'public/js/bootstrap.min.js' ;?>"></script>
	<script type="text/javascript">
		var url = '<?php echo base_url(); ?>';
	</script>
	<script src="<?php echo base_url().'public/js/main.js' ;?>"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="<?php echo base_url()?>">Logo</a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url().'sign_up' ?>">Sign up</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 3</a>
    </li>
  </ul>
</nav>