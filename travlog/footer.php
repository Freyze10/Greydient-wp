<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package travlog
 */

?>

	<footer id="colophon" class="site-footer">
	<div class="left flex">
			<div class="site flex">
				<div class="top flex">
					<img src="wp-content/themes/travlog/img/vector.png" alt="">
					<p>Travlog</p>
				</div>
				<p class="detail">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
			</div>
			<div class="socials flex">
				<img src="wp-content/themes/travlog/img/facebook.png" alt="">
				<img src="wp-content/themes/travlog/img/twitter.png" alt="">
				<img src="wp-content/themes/travlog/img/insta.png" alt="">
			</div>
		</div>
		<div class="right flex">
			<div class="company flex">
				<h6>Company</h6>
				<p>About</p>
				<p>Career</p>
				<p>Mobile</p>
			</div>
			<div class="contact flex">
				<h6>Contact</h6>
				<p>Why Travlog?</p>
				<p>Partner with us</p>
				<p>FAQ’s</p>
				<p>Blog</p>
			</div>
			<div class="meet flex">
				<h6>Meet Us</h6>
				<p>+00 92 1234 56789</p>
				<p>info@travlog.com</p>
				<div>
					<p>205. R Street, New York</p>
					<p>BD23200</p>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

<script>
  
  document.addEventListener('DOMContentLoaded', () => {

    const masthead = document.getElementById('masthead');
    const frame85 = document.getElementById('frame85');
    const testimonials = document.getElementById('testimonials');

  const renderHeader = () => {
    if (window.innerWidth <= 1024) {
      // Replace masthead content with the mobile version
      masthead.innerHTML = `
          <div class="frame1">
            <img class="logo-img" src="wp-content/themes/travlog/img/vector.png" alt="logo">
            <h1 class="travlog">Travlog</h1>
          </div>
          <div class="dropdown-menu">
            <img class="hamburger-button" src="wp-content/themes/travlog/img/burger.png">
            <div class="frame2" style="display:none;">
              <button onclick="mainNavColor(0)"><a href="#home">Home</a></button>
              <button onclick="mainNavColor(1)"><a href="#discover">Discover</a></button>
              <button onclick="mainNavColor(2)"><a href="#special">Special Deals</a></button>
              <button onclick="mainNavColor(3)"><a href="#contact">Contact</a></button>	
            </div>
          </div>
          <div class="frame3">
            <button class="login">Log In</button>
            <button class="signup">Sign Up</button>
          </div>
      `;
      frame85.innerHTML = `
          <div class="top flex">
            <img src="wp-content/themes/travlog/img/tripadvisor.png" alt="">
            <img src="wp-content/themes/travlog/img/expedia.png" alt="">
            <img src="wp-content/themes/travlog/img/booking.png" alt="">
          </div>
          <div class="down flex">
            <img src="wp-content/themes/travlog/img/airbnb.png" alt="">
            <img src="wp-content/themes/travlog/img/orbitz.png" alt="">
          </div>
      `;

      const hamburgerButton = document.querySelector('.hamburger-button');
      const frame2 = document.querySelector('.frame2');

      // Toggle dropdown menu visibility
      hamburgerButton.addEventListener('click', () => {
        frame2.style.display =
          frame2.style.display === 'none' ? 'flex' : 'none';
      });
    }
    if (window.innerWidth <= 430) {
      testimonials.innerHTML = `
          
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
          <div class="arrows flex">
            <div class="arr-left flex">
              <img src="wp-content/themes/travlog/img/arrow-left.png" alt="">
            </div>
            <div class="arr-right flex">
              <img src="wp-content/themes/travlog/img/arrow-right.png" alt="">
            </div>
          </div>
      `;
    } else {
      // Replace masthead content with the desktop version
      masthead.innerHTML = `
        <div class="frame1">
          <img class="logo-img" src="wp-content/themes/travlog/img/vector.png" alt="logo">
          <h1 class="travlog">Travlog</h1>
        </div>
        <div class="frame2">
          <button onclick="mainNavColor(0)"><a href="#home">Home</a></button>
          <button onclick="mainNavColor(1)"><a href="#discover">Discover</a></button>
          <button onclick="mainNavColor(2)"><a href="#special">Special Deals</a></button>
          <button onclick="mainNavColor(3)"><a href="#contact">Contact</a></button>		
        </div>
        <div class="frame3">
          <button class="login">Log In</button>
          <button class="signup">Sign Up</button>
        </div>
      `;
    }
  };

  // Render header based on initial screen size
  renderHeader();

  // Re-render header on screen resize
  window.addEventListener('resize', renderHeader);

  function mainNavColor(index) {
	const navLinks = document.querySelectorAll('.frame2 button');
	navLinks.forEach(function(link, i) {
	if (i !== index) {
		link.style.color = "rgba(25, 24, 37, 0.5)"; // Reset to default color
	}
	});
	if (index == 0) {
	navLinks[index].querySelector('a').style.color = "rgba(34, 40, 49, 1)";
	}
	if (index == 1) {
	navLinks[index].querySelector('a').style.color = "rgba(34, 40, 49, 1)";
	}
	if (index == 2) {
	navLinks[index].querySelector('a').style.color = "rgba(34, 40, 49, 1)";
	}
	if (index == 3) {
	navLinks[index].querySelector('a').style.color = "rgba(34, 40, 49, 1)";
	}
}
mainNavColor(0);
  // GSAP Animation Setup
  if (window.gsap && window.ScrollTrigger) {
    gsap.registerPlugin(ScrollTrigger);

    function initializeTextReveal() {
      const textWidgets = document.querySelectorAll('.show_text');

      textWidgets.forEach((textWidget) => {
        gsap.set(textWidget, {
          y: '100%',
          opacity: 0,
        });

        ScrollTrigger.create({
          trigger: textWidget.closest('.start-reveal'),
          start: 'top 80%',
          end: 'bottom 60%',
          onEnter: () => {
            gsap.to(textWidget, {
              y: '0%',
              opacity: 1,
              duration: 0.8,
              ease: 'power1.out',
            });
          },
          onLeaveBack: () => {
            gsap.to(textWidget, {
              y: '100%',
              opacity: 0,
              duration: 0.5,
              ease: 'power1.in',
            });
          },
        });
      });
    }

    initializeTextReveal();
  }
});


  
</script>
</body>
</html>
