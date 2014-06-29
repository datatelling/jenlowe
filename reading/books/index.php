<?php include("../../header.php"); ?>

	<!-- CONTENT -->
	<section class="content">

		<?php
			include("../../parsedown/Parsedown.php");
			$Parsedown = new Parsedown();
			echo $Parsedown->text(file_get_contents ('books.md'));
		?>

	</section>

<?php include("../../footer.php"); ?>

	
