<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="robots" content="noindex, nofollow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP UUID</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap">
	<style type="text/css">
		* {
			font-family: 'Source Code Pro';
			font-size: 14px;
			box-sizing: border-box;
		}
		body {
			padding: 0;
			margin: 0;
			background: rgb(239, 239, 231);
		}

		main {
			display: flex;
			flex-wrap: wrap;
			flex-direction: row;
			justify-content: center;
			align-items: stretch;
			padding: 5px;
		}

		h3 {
			background: rgba(203, 201, 193, 0.5);
			border-radius: 5px;
			padding: 10px;
			margin: 0;
		}

		section {
			flex: 1 1 30%;
			width: 100%;
			padding: 10px;
			margin: 5px;
			border: 1px solid #E2E0D8;
			border-radius: 5px;
			background: #FCFCFA;
		}

		@media (max-width: 900px) {
			main {
				flex-direction: column;
				align-items: center;
				padding: 5px 15px 5px 5px;
			}
		}
	</style>
</head>
<body>

<?php
$uid = md5(uniqid("", true));
function uidx($uidx) {
	return substr($uidx, 0, 8)."-".substr($uidx, 8, 4)."-".substr($uidx, 12, 4)."-".substr($uidx, 16, 4)."-".substr($uidx, 20, 12);
}
function uidxm($uidx) {
	$min = ['a','b','c','d','e','f'];
	$max = ['A','B','C','D','E','F'];
	$guid = substr($uidx, 0, 8)."-".substr($uidx, 8, 4)."-".substr($uidx, 12, 4)."-".substr($uidx, 16, 4)."-".substr($uidx, 20, 12);
	return str_replace($min, $max, $guid);
}
?>

	<main>

		<section>
			<h3>md5(uniqid())</h3>
			<p style="text-align: center;"><?= $uid; ?></p>
		</section>

		<section>
			<h3>UID php</h3>
			<p style="text-align: center;"><?= uidx($uid); ?></p>
		</section>

		<section>
			<h3>UID UP php</h3>
			<p style="text-align: center;"><?= uidxm($uid); ?></p>
		</section>

	</main>

</body>
</html>