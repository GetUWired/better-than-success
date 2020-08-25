<?php 
/*
Template Name: Better Than Success Member Dashboard
*/

get_header('membership');
?>

<div class="main-content">
	<div class="welcome-message title">
		<h3>My Dashboard</h3>
		<p>Welcome to the Better Than Success Dashboard. Let's get started!</p>
	</div>

	<?php
		// if(memb_hasAnyTags(array('139'))) {
	?>

		<div class="banner">
			<div>
				<img src="https://betterthansuccess.com/wp-content/uploads/2020/08/BTS_mastermind.png">
			</div>
			<div><h3>Upcoming Events</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
				<a href="#">Register Today!</a>
			</div>
		</div>

	<?php
		// }
	?>


	<div>
		<ul class="graphic_blocks gb_ads">
			<li class="gb_mastermind">
				<a href="/bts-realestate-league-member-courses-roll">
					<span class="gb_top_image"></span>
					<span class="gb_icon"></span>
					<span class="gb_text">BTS Mastermind and Lecture Recordings</span>
					<span class="gb_button">View Recordings</span>
				</a>
			</li>
			<li class="gb_newsletter">
				<a href="/bts-members-newsletter" target="_blank">
					<span class="gb_top_image"></span>
					<span class="gb_icon"></span>
					<span class="gb_text">BTS Members Only Newsletter Info</span>
					<span class="gb_button">Get the Info</span>
				</a>
			</li>
			<li class="gb_newmembers">
				<a href="/bts-re-league-beginners-lessons" target="_blank">
					<span class="gb_top_image"></span>
					<span class="gb_icon"></span>
					<span class="gb_text">New Members Class</span>
					<span class="gb_button">Go to Class</span>
				</a>
			</li>
			<li class="gb_directory" target="_blank">
				<a href="/business-directory" target="_blank">
					<span class="gb_top_image"></span>
					<span class="gb_icon"></span>
					<span class="gb_text">BTS Real Estate Directory</span>
					<span class="gb_button">View Directory</span>
				</a>
			</li>
			<li class="gb_discounts">
				<a href="#" target="_blank">
					<span class="gb_top_image"></span>
					<span class="gb_icon"></span>
					<span class="gb_text">Special BTS Members Only Discount</span>
					<span class="gb_button">See Discounts</span>
				</a>
			</li>
		</ul>
	</div>



</div>




