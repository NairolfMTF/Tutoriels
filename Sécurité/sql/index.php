<?php

require_once("db.php");

?><!doctype html>
<html>
	<head>
		<title>Tuto faille sql</title>
		<link href="style.css" rel="stylesheet" />
	</head>
	<body>
		<div class="mail-list">
			<?php
			
			$req = $db->query('SELECT * FROM emails');
			
			while ($mail = $req->fetch()) {
			    ?>
			    <div class="mail" onclick="window.location='./?id=<?= $mail->id; ?>';">
				    <p class="title">Mail</p>
			    </div>
			    <?php
			}
			
			?>
		</div>
		<div class="preview">
			<?php
			
			if (isset($_GET["id"])) {
			     $req = $db->prepare('SELECT * FROM emails WHERE id = ?'); // Cette ligne de code est importante
			     $req->execute([$_GET["id"]]); // Cette ligne de code est importante
			     $text = $req->fetch();
			     
			     if ($text) {
			         echo htmlentities($text->text);
			     }
			}
			
			?>
		</div>
	</body>
</html>
