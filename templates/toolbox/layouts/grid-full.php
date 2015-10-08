<!--
Description: A full width grid example where based upon the date-count attribute the CSS will handle the columsn widths and responsive task.
Tags: grid, full width
Preview: true
-->

<section class="grid grid--full">
	<div class="grid__container">

		<?php for($i=2; $i<5; $i++): ?>
			
		<div class="grid__row" data-count="<?php echo $i;?>">

			<?php for($j=0; $j<$i; $j++): ?>
			<div class="grid__item">
				<img src="http://fakeimg.pl/850x550/eeeeee/666/?text=img" alt="fake img"/>
			</div><!-- end of grid item -->
			<?php endfor; ?> 

		</div><!-- end of grid row -->
	
		<?php endfor; ?> 

	</div><!-- end of grid container -->
</section><!-- end of grid --> 