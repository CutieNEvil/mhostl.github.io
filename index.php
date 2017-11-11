<!DOCTYPE html>
<html>
	<head>
		<title>Online Password Generator</title>
	
	</head>
		<body>
			<button type="button">Click me to get your random passowrd</button>
				<?php
								function randomPassword() {
					$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
					$pass = array(); //remember to declare $pass as an array
					$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
					for ($i = 0; $i < 8; $i++) {
						$n = rand(0, $alphaLength);
						$pass[] = $alphabet[$n];
					}
					return implode($pass); //turn the array into a string
				}

				
				
				?>
		</body>
</html>