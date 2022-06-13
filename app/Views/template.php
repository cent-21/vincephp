<!DOCTYPE HTML>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--==================== CSS ====================-->
	<link rel="stylesheet" type="text/css" href="<?= asset('css/style.css') ?>">

	<title><?= page_title($title ?? null) ?></title>

	<meta name="description" content="">

	<!--================= SITE ICON ===============-->
	<link rel="icon" type="image/x-icon" href="<?= asset('img/logo.png') ?>">

    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">        
	
	<!--================= CSS BOOTSTRAP ===============-->
	<link href="<?= asset('css/bootstrap.min.css') ?>" rel="stylesheet">
 
	<!--==================== ALPINEJS ====================-->
	<!-- <script defer src="<?= asset('js/alpinejs.cdn.min.js') ?>"></script> -->

</head>
<body>





		<main class="bg-white" style="height: 82.5%;">
			<?= $content ?> 
		</main>

		


		<!--================= JS BOOTSTRAP ===============-->
		<script src="<?= asset('js/bootstrap.min.js') ?>"></script>

		<!--==================== JS ====================-->
		<script type="text/javascript" src="<?= asset('js/script.js') ?>"></script>

	</body>
</html>