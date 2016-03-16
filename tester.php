<!DOCTYPE HTML>

<html>
	<head>
		<title>PHP File Read Test</title>
	</head>

	<body>
		<?php
			echo "hello world";
			$schedule = fopen("schedule.txt", "r") or die("Unable to display schedule");
			echo fread($schedule, filesize("schedule.txt"));
			if($schedule){
				while (($line = fgets($handle)) !== false) {
					print $line;
				}
				fclose($schedule);
			}
			//else{

			//}
			
			//fclose($schedule);
		?>
	</body>
</html>
