<?php if( have_rows('slideshow') ): ?>

<section class="gallery">
	<div class="container">
		
		<div id="client-carousel" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
			  
			  <?php 
				  $i = 0;
				  while( have_rows('slideshow') ): the_row();
				?>

		    <li data-target="#client-carousel" data-slide-to="<?=$i?>" class="<?php if($i===0) echo 'active' ?>"></li>
		    
		    <?php
			    $i++;
			    endwhile;
			  ?>
		    
		  </ol>
			<div class="carousel-inner" role="listbox">
			<?php 
				$j = 0;
				while( have_rows('slideshow') ): 
					the_row();
					$image = get_sub_field('image');
					$title = get_sub_field('title');
					$caption = get_sub_field('caption');
			?>
		
		    <div class="item <?php if($j===0) echo 'active' ?>">
		      <img src="<?=$image?>" alt="<?=$title?>">
		    </div>		
		      
		  <?php
			  $j++;
			  endwhile;
			 ?>
			</div>

		  <a class="left carousel-control" href="#client-carousel" role="button" data-slide="prev">
			  <span class="fa fa-caret-left"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#client-carousel" role="button" data-slide="next">
			  <span class="fa fa-caret-right"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
				
	</div>
</section>		

<?php endif; ?>
