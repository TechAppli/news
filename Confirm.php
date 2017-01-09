<?php
include('function.php');

?>
<html>
<body>
	<?php
      $tokens=$_GET['id'];
      user_confirm($tokens);
	?>

	<h3>Vous ete confirme</h3>
</body>
</html>
