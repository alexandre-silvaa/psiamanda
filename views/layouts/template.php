<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Amanda Gomes - Psicanalista</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="resources/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="resources/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="resources/favicon/favicon-16x16.png">
    <link rel="manifest" href="resources/favicon/site.webmanifest">

	<!-- CSS bootstrap -->
	<link rel="stylesheet" href="resources/bootstrap/css/bootstrap.css">
	<!-- CSS Style -->
	<link rel="stylesheet" href="resources/css/style.css">	
	<!-- CSS font Awesome -->
	<link rel="stylesheet" href="resources/fontawesome/css/all.min.css">
</head>
<body>

	<div class="wrapper">
    <?php require 'views/layouts/navbar.php'; ?>

		<div class="container-fluid">
            <!-- <?php echo $content; ?> -->

			<?php require 'views/includes/_introduction.php'; ?>
			<?php require 'views/includes/_psicanalise.php'; ?>
			<?php require 'views/includes/_about.php'; ?>
			<?php require 'views/includes/_help-solve.php'; ?>
			<?php require 'views/includes/_questions.php'; ?>
			<?php require 'views/includes/_contact.php'; ?>
			<?php require 'views/includes/_alert.php'; ?>
			<?php require 'views/includes/_footer.php'; ?>
		</div>
		
	</div>
	

	<!-- JS bootstrap -->
	<script src="resources/bootstrap/js/bootstrap.js"></script>
	<script src="resources/bootstrap/js/bootstrap.bundle.js"></script>
	<!-- JS font Awesome -->
	<script script="resources/fontawesome/js/all.min.js"></script>
	<!-- JS font Awesome -->
	<script src="resources/js/script.js"></script>

</body>
</html>