<?php if( have_rows('slideshow') ): ?>

<section class="gallery">
	<div class="container">
	
	<div id="carousel" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel" data-slide-to="1"></li>
	  </ol>
	
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img src="http://localhost/dd/wp-content/uploads/2015/10/Design11.jpg" alt="Image One">
	      <div class="carousel-caption">
	        <h3>Image One</h3>
	        <p>Blah</p>
	      </div>
	    </div>
	    <div class="item">
	      <img src="http://localhost/dd/wp-content/uploads/2015/10/Design2-wide.jpg" alt="Image Two">
	      <div class="carousel-caption">
	        <h3>Image Two</h3>
	        <p>Blah</p>
	      </div>
	    </div>
	  </div>
	
	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
		
	</div>
</section>		

<?php endif; ?>
