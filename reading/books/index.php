<?php include("../header.php"); ?>

	<!-- CONTENT -->
	<section class="content">

		<?php
			include("../parsedown/Parsedown.php");
			$Parsedown = new Parsedown();
			echo $Parsedown->text(file_get_contents ('books.md'));
		?>

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

      <div id="gr_grid_widget_1404081136">
        <!-- Show static html as a placeholder in case js is not enabled - javascript include will override this if things work -->
          <div class="gr_grid_container">
    <div class="gr_grid_book_container"><a href="https://www.goodreads.com/book/show/18528093-capitalism" title="Capitalism: A Ghost Story"><img alt="Capitalism: A Ghost Story" border="0" src="https://d.gr-assets.com/books/1394522809s/18528093.jpg" /></a></div>
    <div class="gr_grid_book_container"><a href="https://www.goodreads.com/book/show/11869272-behind-the-beautiful-forevers" title="Behind the Beautiful Forevers: Life, Death, and Hope in a Mumbai Undercity"><img alt="Behind the Beautiful Forevers: Life, Death, and Hope in a Mumbai Undercity" border="0" src="https://d.gr-assets.com/books/1315601232s/11869272.jpg" /></a></div>
    <div class="gr_grid_book_container"><a href="https://www.goodreads.com/book/show/12331767-high-rise" title="High-Rise"><img alt="High-Rise" border="0" src="https://d.gr-assets.com/books/1358752559s/12331767.jpg" /></a></div>
    <div class="gr_grid_book_container"><a href="https://www.goodreads.com/book/show/61049.Autobiography_of_Red" title="Autobiography of Red"><img alt="Autobiography of Red" border="0" src="https://d.gr-assets.com/books/1403176248s/61049.jpg" /></a></div>
    <div class="gr_grid_book_container"><a href="https://www.goodreads.com/book/show/18404251-cutting-teeth" title="Cutting Teeth"><img alt="Cutting Teeth" border="0" src="https://d.gr-assets.com/books/1398801104s/18404251.jpg" /></a></div>
    <div class="gr_grid_book_container"><a href="https://www.goodreads.com/book/show/12543.Bird_by_Bird" title="Bird by Bird: Some Instructions on Writing and Life"><img alt="Bird by Bird: Some Instructions on Writing and Life" border="0" src="https://d.gr-assets.com/books/1394996112s/12543.jpg" /></a></div>
    <div class="gr_grid_book_container"><a href="https://www.goodreads.com/book/show/173666.Radical_Acceptance" title="Radical Acceptance: Embracing Your Life With the Heart of a Buddha"><img alt="Radical Acceptance: Embracing Your Life With the Heart of a Buddha" border="0" src="https://d.gr-assets.com/books/1320402151s/173666.jpg" /></a></div>
    <div class="gr_grid_book_container"><a href="https://www.goodreads.com/book/show/17607.All_About_Love" title="All About Love: New Visions (bell hooks Love Trilogy)"><img alt="All About Love: New Visions" border="0" src="https://d.gr-assets.com/books/1387754966s/17607.jpg" /></a></div>
    <div class="gr_grid_book_container"><a href="https://www.goodreads.com/book/show/17574842-shantytown" title="Shantytown"><img alt="Shantytown" border="0" src="https://d.gr-assets.com/books/1363584622s/17574842.jpg" /></a></div>
    <div class="gr_grid_book_container"><a href="https://www.goodreads.com/book/show/381960.The_Braindead_Megaphone" title="The Braindead Megaphone"><img alt="The Braindead Megaphone" border="0" src="https://d.gr-assets.com/books/1306149593s/381960.jpg" /></a></div>
    <div class="gr_grid_book_container"><a href="https://www.goodreads.com/book/show/15808438-the-last-best-cure" title="The Last Best Cure: My Quest to Awaken the Healing Parts of My Brain and Get Back My Body, My Joy, and My Life"><img alt="The Last Best Cure: My Quest to Awaken the Healing Parts of My Brain and Get Back My Body, My Joy, and My Life" border="0" src="https://d.gr-assets.com/books/1358750612s/15808438.jpg" /></a></div>
    <div class="gr_grid_book_container"><a href="https://www.goodreads.com/book/show/20454977-sleep-donation" title="Sleep Donation"><img alt="Sleep Donation" border="0" src="https://d.gr-assets.com/books/1393258037s/20454977.jpg" /></a></div>
    <div class="gr_grid_book_container"><a href="https://www.goodreads.com/book/show/17568814-hannah-arendt" title="Hannah Arendt: The Last Interview: And Other Conversations"><img alt="Hannah Arendt: The Last Interview: And Other Conversations" border="0" src="https://d.gr-assets.com/books/1375911422s/17568814.jpg" /></a></div>
    <div class="gr_grid_book_container"><a href="https://www.goodreads.com/book/show/16057147-submergence" title="Submergence"><img alt="Submergence" border="0" src="https://d.gr-assets.com/books/1369092462s/16057147.jpg" /></a></div>
    <div class="gr_grid_book_container"><a href="https://www.goodreads.com/book/show/1474356.Hold_Everything_Dear" title="Hold Everything Dear: Dispatches on Survival and Resistance"><img alt="Hold Everything Dear: Dispatches on Survival and Resistance" border="0" src="https://d.gr-assets.com/books/1320426270s/1474356.jpg" /></a></div>
    <div class="gr_grid_book_container"><a href="https://www.goodreads.com/book/show/17286839-the-detox-prescription" title="The Detox Prescription: Supercharge Your Health, Strip Away Pounds, and Eliminate the Toxins Within"><img alt="The Detox Prescription: Supercharge Your Health, Strip Away Pounds, and Eliminate the Toxins Within" border="0" src="https://d.gr-assets.com/books/1377935626s/17286839.jpg" /></a></div>
    <div class="gr_grid_book_container"><a href="https://www.goodreads.com/book/show/7243316-role-models" title="Role Models"><img alt="Role Models" border="0" src="https://d.gr-assets.com/books/1347562392s/7243316.jpg" /></a></div>
    <div class="gr_grid_book_container"><a href="https://www.goodreads.com/book/show/6732019-rework" title="Rework"><img alt="Rework" border="0" src="https://d.gr-assets.com/books/1391275636s/6732019.jpg" /></a></div>
    <div class="gr_grid_book_container"><a href="https://www.goodreads.com/book/show/14315.Mr_Wilson_s_Cabinet_Of_Wonder" title="Mr. Wilson's Cabinet Of Wonder: Pronged Ants, Horned Humans, Mice on Toast, and Other Marvels of Jurassic Technology"><img alt="Mr. Wilson's Cabinet Of Wonder: Pronged Ants, Horned Humans, Mice on Toast, and Other Marvels of Jurassic Technology" border="0" src="https://d.gr-assets.com/books/1382935731s/14315.jpg" /></a></div>
    <div class="gr_grid_book_container"><a href="https://www.goodreads.com/book/show/15893653-heroines" title="Heroines"><img alt="Heroines" border="0" src="https://d.gr-assets.com/books/1346448737s/15893653.jpg" /></a></div>
  <noscript><br/>Share <a href="/">book reviews</a> and ratings with Jen, and even join a <a href="/group">book club</a> on Goodreads.</noscript>
  </div>

      </div>
      <script src="https://www.goodreads.com/review/grid_widget/8159758.Jen's%20bookshelf:%20read?cover_size=small&hide_link=true&hide_title=true&num_books=200&order=d&shelf=read&sort=date_added&widget_id=1404081136" type="text/javascript" charset="utf-8"></script>
      	';

	</section>

<?php include("../footer.php"); ?>

	
