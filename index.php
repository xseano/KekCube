<?php
function crc_file($filepath)
{
	return hash_file('crc32b', $filepath);
}
?>
<!DOCTYPE html>
		<html>
			<head>
				<meta charset="UTF-8">
				<title>xQube</title>
				<style>
					body { margin: 0; }
					canvas { width: 100%; height: 100% }
				</style>
			</head>
	<body>
		<script src="./js/three.js"></script>
		<script src="http://localhost:8080/socket.io/socket.io.js"></script>
		<script src="./js/main.js?v=<?php echo crc_file('./js/main.js'); ?>"></script>	
	</body>
</html>