<?php include("../header.php"); ?>

	<!-- CONTENT -->
	<section class="content">

		<?php
			include("../parsedown/Parsedown.php");
			$Parsedown = new Parsedown();
			echo $Parsedown->text(file_get_contents ('books.md'));
		?>

		<?php 
		echo '
		     <style type="text/css" media="screen">
        	.gr_grid_container {
        	  /* customize grid container div here. eg: width: 500px; */
        	}

        	.gr_grid_book_container {
        		/* customize book cover container div here */
          		float: left;
          		width: 39px;
          		height: 60px;
          		padding: 0px 0px;
          		overflow: hidden;
        	}
      		</style>


      </div>
      <script src="https://www.goodreads.com/review/grid_widget/8159758.Jen\'s%20bookshelf:%20read?cover_size=small&hide_link=true&hide_title=true&num_books=200&order=d&shelf=read&sort=date_added&widget_id=1404081136" type="text/javascript" charset="utf-8"></script>
     ';
     ?>

	</section>

<?php include("../footer.php"); ?>

	
