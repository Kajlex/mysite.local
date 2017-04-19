<?php
	require_once "start.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Гостевая книга</title>
	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/main.css" />
</head>
<body>
	<table id="main">
		<?php
			require_once "blocks/top.php";
		?>
		<tr>
			<td colspan="2">
				<hr />
			</td>
		</tr>
			<tr>
				<td colspan="2">
					<table cellpadding="0" cellspacing="0" id="content">
						<tr>
							<td>
								<?php
									require_once "blocks/guestbook.php";
								?>	
							</td>
							<td id="banners_240">
								<?php
									require_once "blocks/banners_240.php";
								?>		
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<?php
				require_once "blocks/footer.php";
			?>
	</table>
</body>
</html>