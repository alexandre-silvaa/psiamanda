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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- CSS Style -->
	<link rel="stylesheet" href="resources/css/style.css">	
	<!-- CSS font Awesome -->
	<link rel="stylesheet" href="resources/fontawesome/css/all.min.css">

	<!-- FontAwesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>

	<div class="wrapper">
		
		<?php require 'views/layouts/navbar.php'; ?>

		<main>
			<?php require 'views/includes/_introduction.php'; ?>
			<?php require 'views/includes/_psicanalise.php'; ?>
			<?php require 'views/includes/_about.php'; ?>
			<?php require 'views/includes/_help-solve.php'; ?>
			<?php require 'views/includes/_questions.php'; ?>
			<?php require 'views/includes/_contact.php'; ?>
			<?php require 'views/includes/_alert.php'; ?>
			<?php require 'views/includes/_footer.php'; ?>
		</main>
		
	</div>
	
	<!-- JS script -->
	<script src="resources/js/script.js"></script>
	<!-- JQuery -->
	<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
	<!-- JS bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>