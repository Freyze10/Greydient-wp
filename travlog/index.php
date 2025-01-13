<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package travlog
 */

get_header();
?>

<main id="primary" class="site-main">

<div class="home flex start-reveal" id="home">
	<div class="frame81 flex">
		<div class="frame10">
			<p>Explore the world!</p>
			<img src="wp-content/themes/travlog/img/work 1.png" alt="">
		</div>
		<h1 class="travel text-anim-cont show_text">
			Travel <span>top destination</span> of the world
		</h1>
		<p class="sub-title">
			We always make our customer happy by providing <br> as many choices as possible 
		</p>
		<div class="frame8 flex">
			<div class="frame7">
				Get Started
			</div>
			<div class="frame6 flex">
				<img src="wp-content/themes/travlog/img/play-circle.5 1.png" alt="">
				<p>Watch Demo</p>
			</div>
		</div>
	</div>
	<div class="group1">
		<img src="wp-content/themes/travlog/img/Group 1.png" alt="">
	</div>
</div>
<div class="frame85 flex" id="frame85">
	<img src="wp-content/themes/travlog/img/tripadvisor.png" alt="">
	<img src="wp-content/themes/travlog/img/expedia.png" alt="">
	<img src="wp-content/themes/travlog/img/booking.png" alt="">
	<img src="wp-content/themes/travlog/img/airbnb.png" alt="">
	<img src="wp-content/themes/travlog/img/orbitz.png" alt="">
</div>
<div class="services flex start-reveal">
	<div class="frame22 flex text-anim-cont">
		<p class="uppercase show_text">Services</p>
		<h3 class="show_text">Our top value categories for you</h3>
	</div>
	<div class="carousel">
		<div class="car-box flex">
			<img src="wp-content/themes/travlog/img/firstframe.png" alt="">
			<div class="details flex">
				<h5>Best Tour Guide</h5>
				<p>What looked like a small patch of purple grass, above five feet.</p>
			</div>
		</div>
		<div class="car-box flex">
			<img src="wp-content/themes/travlog/img/secondframe.png" alt="">
			<div class="details flex">
				<h5>Easy Booking</h5>
				<p>Square, was moving across the sand in their direction.</p>
			</div>
		</div>
		<div class="car-box flex">
			<img src="wp-content/themes/travlog/img/thirdframe.png" alt="">
			<div class="details flex">
				<h5>Weather Forecast</h5>
				<p>What looked like a small patch of purple grass, above five feet.</p>
			</div>
		</div>
	</div>
</div>
<div class="destination flex start-reveal" id="discover">
	<div class="top-container flex">
		<div class="left flex text-anim-cont">
			<p class="show_text">Top Destination</p>
			<h3 class="show_text">Explore top destination</h3>
		</div>
		<div class="right flex">
			<div class="arr-left flex">
				<img src="wp-content/themes/travlog/img/arrow-left.png" alt="">
			</div>
			<div class="arr-right flex">
				<img src="wp-content/themes/travlog/img/arrow-right.png" alt="">
			</div>
		</div>
	</div>
	<div class="places-container flex start-reveal">
		<div class="boxes show_text">
			<img src="wp-content/themes/travlog/img/paradise.png" alt="">
			<div class="place-details flex">
				<div class="detail-container flex">
					<div class="title flex">
						<h6>Paradise Beach, Bantayan Island</h6>
						<h6>$550.16</h6>
					</div>
					<p>Rome, Italy</p>
				</div>
				<div class="rating flex">
					<h6>4.8</h6>
					<img src="wp-content/themes/travlog/img/star.png" alt="">
				</div>
			</div>
		</div>
		<div class="boxes show_text">
			<img src="wp-content/themes/travlog/img/fish.png" alt="">
			<div class="place-details flex">
				<div class="detail-container flex">
					<div class="title flex">
						<h6>Ocean with full of Colors</h6>
						<h6>$20.99</h6>
					</div>
					<p>Maldives</p>
				</div>
				<div class="rating flex">
					<h6>4.5</h6>
					<img src="wp-content/themes/travlog/img/star.png" alt="">
				</div>
			</div>
		</div>
		<div class="boxes show_text">
			<img src="wp-content/themes/travlog/img/mountain.png" alt="">
			<div class="place-details flex">
				<div class="detail-container flex">
					<div class="title flex">
						<h6>Mountain View, Above the cloud</h6>
						<h6>$150.99</h6>
					</div>
					<p>United Arab Emeries </p>
				</div>
				<div class="rating flex">
					<h6>5.0</h6>
					<img src="wp-content/themes/travlog/img/star.png" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="travel-point flex start-reveal">
	<img src="wp-content/themes/travlog/img/yellow.png" alt="">
	<div class="travel-point-container flex">
		<div class="travel-detail flex">
			<div class="first flex show_text">
				<p>Travel Point</p>
				<h3>We helping you find your dream location</h3>
			</div>
			<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
		</div>
		<div class="package flex start-reveal">
			<div class="two-box flex show_text">
				<div class="pack-box flex">
					<h4>500+</h4>
					<p>Holiday Package</p>
				</div>
				<div class="pack-box flex">
					<h4>100</h4>
					<p>Luxury Hotel</p>
				</div>
			</div>
			<div class="two-box flex show_text">
				<div class="pack-box flex">
					<h4>7</h4>
					<p>Premium Airlines</p>
				</div>
				<div class="pack-box flex">
					<h4>2k+</h4>
					<p>Happy Customer</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="key-features-container flex" id="special">
	<div class="key-features flex start-reveal">
		<div class="one flex">
			<div class="title text-anim-cont flex">
				<p class="show_text">Key features</p>
				<h3 class="show_text">We offer best services</h3>
			</div>
			<p class="parag">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
			from 45 BC.</p>
		</div>
		<div class="two start-reveal">
			<div class="key_card flex show_text">
				<img src="wp-content/themes/travlog/img/location.png" alt="">
				<div class="card_detail flex">
					<h6>We offer best services</h6>
					<p>Lorem Ipsum is not simply random text</p>
				</div>
			</div>
			<div class="key_card flex show_text">
				<img src="wp-content/themes/travlog/img/calendar.png" alt="">
				<div class="card_detail flex">
					<h6>Schedule your trip</h6>
					<p>It has roots in a piece of classical</p>
				</div>
			</div>
			<div class="key_card flex show_text">
				<img src="wp-content/themes/travlog/img/coupon.png" alt="">
				<div class="card_detail flex">
					<h6>Get discounted coupons</h6>
					<p>Lorem Ipsum is not simply random text</p>
				</div>
			</div>
		</div>
	</div>
	<img src="wp-content/themes/travlog/img/paradise-on-earth.png" alt="">
</div>
<div class="testimonials-container flex start-reveal" id="testimonials">
	<div class="arr-left flex">
		<img src="wp-content/themes/travlog/img/arrow-left.png" alt="">
	</div>
	<div class="middle flex">
		<div class="one flex">
			<p class="show_text">Testimonials</p>
			<h3 class="show_text">Trust our clients</h3>
		</div>
		<img src="wp-content/themes/travlog/img/vr.png" alt="" class="two show_text">
		<div class="three flex start-reveal">
			<p class="show_text"><span>Mark Smith</span> / Travel Enthusiast</p>
			<div class="stars flex show_text">
				<img src="wp-content/themes/travlog/img/star-yellow.png" alt="">
				<img src="wp-content/themes/travlog/img/star-yellow.png" alt="">
				<img src="wp-content/themes/travlog/img/star-yellow.png" alt="">
				<img src="wp-content/themes/travlog/img/star-yellow.png" alt="">
				<img src="wp-content/themes/travlog/img/star-yellow.png" alt="">
			</div>
		</div>
		<p class="four">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
		in a piece of classical Latin literature from 45 BC.</p>
		<div class="five flex">
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
		</div>
	</div>
	<div class="arr-right flex">
		<img src="wp-content/themes/travlog/img/arrow-right.png" alt="">
	</div>
</div>
<div class="contact-container flex" id="contact">
	<div class="contact flex ">
		<div class="subscribe flex text-anim-cont start-reveal">
			<p class="uppercase show_text">subscribe to our newsletter</p>
			<h2 class="show_text">Prepare yourself & let’s explore the beauty of the world</h2>
		</div>
		<div class="email-input flex start-reveal">
			<div class="input-field">
				<input type="text" placeholder="Your Email">
				<img src="wp-content/themes/travlog/img/email.png" alt="">
			</div>
			<div class="btn-subscribe show_text">Subscribe</div>
		</div>
	</div>
</div>
</main><!-- #main -->
<img src="wp-content/themes/travlog/img/OBJECTS.png" alt="" class="OBJECTS">
<img src="wp-content/themes/travlog/img/Ellipse.png" alt="" class="ellipse absolute">
<img src="wp-content/themes/travlog/img/voucher.png" alt="" class="voucher absolute">
<img src="wp-content/themes/travlog/img/triangle-dots.png" alt="" class="triangle-dots absolute">
<img src="wp-content/themes/travlog/img/hypno.png" alt="" class="hypno absolute">
<div class="wave absolute"></div>

<?php
get_footer();