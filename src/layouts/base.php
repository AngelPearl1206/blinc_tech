<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> <?php echo $site_name; ?> </title>
	<link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- <script src="http://requirejs.org/docs/release/2.1.15/minified/require.js"></script> -->
	<script src="https://rawgit.com/ironwallaby/delaunay/master/delaunay.js"></script>
	<?php if ($in_concat == true) { ?>
		<link rel="shortcut icon" href="./assets/img/logo/favicon.ico">
		<?php include __DIR__ . '/meta.php'; ?>
		<?php include __DIR__ . '/script.php'; ?>
		<?php include __DIR__ . '/styles.php'; ?>
	<?php } else { ?>
		<link rel="shortcut icon" href="../assets/img/logo/favicon.ico">
		<?php include __DIR__ . '/meta.php'; ?>
		<?php include __DIR__ . '/script.php'; ?>
		<?php include __DIR__ . '/styles.php'; ?>
	<?php } ?>
</head>

<?php if ($in_concat == true) { ?>

	<body data-bs-theme="light">
		<?php include './layouts/header.php'; ?>
		<!-- <script src="../assets/js/particles.js"></script> -->
		<div class="">
			<?php echo $content; ?>
		</div>
		<?php include './layouts/footer.php'; ?>
	<?php } else { ?>

		<body data-bs-theme="light">
			<?php include __DIR__ . '/header.php'; ?>
			<div class="page">
				<?php echo $content; ?>
			</div>
			<?php include __DIR__ . '/footer.php'; ?>
		<?php } ?>
		<div id="loader" class="loader">
			<div class="fade-in">
				<?php if ($in_concat == true) { ?>
					<?php echo '<img src="./assets/img/logo/blinc-loader-icon.gif" alt="blinc-loader-icon">' ?>
				<?php } else { ?>
					<link rel="shortcut icon" href="../assets/img/logo/favicon.ico">
					<?php echo '<img src="../assets/img/logo/blinc-loader-icon.gif" alt="blinc-loader-icon">' ?>
				<?php } ?>


				<div>
				</div>
		</body>

</html>