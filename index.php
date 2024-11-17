<?php get_header(); ?>
<main id="content">

  <div class="body__wrapper">

<!--Dates-->
<div class="dates__container">
  <div class="dates__column">
    <div class="dates__text">
      <h2>Dec 6 & 7 <span class="dates__or">or</span> Dec 13 & 14</h2>
    </div>
  </div>
</div>


	<!--Buy Tickets-->
	<div class="tickets-button">
		<a target="_blank" href="https://grimtrails.fearticket.com/frontapp">
			<h3>Buy Tickets Online</h3>
			<!-- <p>(Also available at the Box Office)</p> -->
		</a>
	</div>

	<!--Video-->
	<div class="video-responsive">
	<div class="video-container">
	  <!-- <iframe width="100%" height="700" src="https://www.youtube.com/embed/RtbawD5FApI?autoplay=1&controls=0&showinfo=0&autohide=1&loop=1&mute=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
		<div class="fb-video" data-href="https://www.facebook.com/61568327801106/videos/575763614865500" data-autoplay="true" data-width="3000" data-show-text="false"><blockquote cite="https://www.facebook.com/61568327801106/videos/575763614865500/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/61568327801106/videos/575763614865500/"></a><p>Only a few weeks away, Enchanted Winter Woods will be open December 6th 7th 13th and 14th from 6-8:30pm.</p>Posted by <a href="https://www.facebook.com/people/Enchanted-Winter-Woods/61568327801106/">Enchanted Winter Woods </a> on Thursday, November 14, 2024</blockquote></div>
	</div>
	</div>


	<!--Event Description-->
	<div class="description__container">
	  <div class="description__title">
	  <h1 class="description__banner">
	  		Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		</h1>
		<br><br>
		<h2>
		Phasellus ornare tellus ut lorem gravida, maximus convallis neque venenatis. 
		</h2>
	  </div>
	  <div class="description__text">
	  Duis varius sed odio nec accumsan. Ut vestibulum maximus urna, bibendum vehicula arcu venenatis ut. 
	  Duis dignissim velit id pellentesque semper.
	  Nam feugiat, ligula eget varius semper, ex turpis consectetur lacus, eu pellentesque eros augue in lacus.
	  </div>
	</div>

	<!--Slideshow Gallery-->
<div class="slideshow__container">
  <div class="slideshow">
    <button class="slideshow__control prev">❮</button>
    <div class="slideshow__images">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image1.jpg" alt="Image 1">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image2.jpg" alt="Image 2">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image3.jpg" alt="Image 3">
	  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image4.jpg" alt="Image 4">
    </div>
    <button class="slideshow__control next">❯</button>
  </div>
</div>


	<!--Event Schedule Blocks-->
	<div class="schedule__container">
	  <div class="schedule__column schedule__mobile">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>../images/1_homepage.png" class="schedule__image img-fluid" />
	  </div>
	  <div class="schedule__column">
		<div class="schedule__text">
		  <div class="schedule__subtitle">2024 EVENT SCHEDULE</div>
	  <p>We are open every Friday and Saturday from 8:00 PM to Midnight </br>September 13th through November 2nd.</p>
		  <!-- Open Dusk to 12:30AM <br />Fridays and Saturdays starting on
		  October 2nd
		  <p>Tickets are <span>$20.00</span> per person.</p> -->
		</div>
		</br></br>
		<div class="schedule__row">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>../images/2024-calendar-wide.webp" class="schedule__image img-fluid" />
	  </div>
	  </br></br>
		<div class="tickets-button">
		<a target="_blank" href="https://grimtrails.fearticket.com/frontapp">
			<h3>Buy Tickets Online</h3>
		</a>
	</div>
	  </div>
	  <div class="schedule__column schedule__column-right">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>../images/1_tall.png" class="schedule__image img-fluid" />
		<img src="<?php echo get_stylesheet_directory_uri(); ?>../images/3.png" class="schedule__image img-fluid" />
	  </div>
	</div>

	<!-- Tour Info
	<div class="tour__container">
	  <h3 class="tour__info">
		  Want to see the Haunted Trail without the scares? 
	  </h3>
	  <h4 class="tour__description">  
		  We offer behind-the-scenes tours all month.
		  Admission is $10 per person. Please call <a href="tel:502-594-7624" target="_blank">502-594-7624</a> to schedule an appointment, or for more information.
	  </h4>
	</div> -->

	<!--Map-->
	<div class="map__container">
	  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12527.500407536967!2d-85.552195!3d38.282388!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8869a190dd2db409%3A0x2a883abdca7cee7c!2sGrim%20Trails%20Haunted%20Attraction!5e0!3m2!1sen!2sus!4v1720624291768!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<?php get_footer(); ?>
