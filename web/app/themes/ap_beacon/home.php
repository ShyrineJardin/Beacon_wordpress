<?php get_header(); ?>
	<section class="hero">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.png" alt="hero background" />
		
		<div class="container">
			<div class="hero__title">
			<h1>FIND YOUR <span class="hero__mobile-break">DREAM HOME</span></h1>
			</div>

			<div class="hero__subtitle">
			<p>Get the inside track on landing your dream home with exclusive listings, cutting edge resources, and the latest technology</p>
			</div>

			<div class="hero__actions">
			<div class="hero__action">
				<a href="/">FEATURED HOMES</a>
			</div>

			<div class="hero__action">
				<a href="/">Contact us</a>
			</div>
			</div>
		</div>
	</section>
	
	<!-- <div class="search">
		<?= do_shortcode('[realscout_listings agent-encoded-id="QWdlbnQtMTY1MA==" sort-order="PRICE_HIGH" divider_color="#e15ff2" ]'); ?>
	</div>

	<div class="search">
		<?= do_shortcode('[advanced_search_widget]'); ?>
	</div> -->

	<section class="quick-search">
		<div class="quick-search__container">
			<div class="quick-search__inner">
			
			<div class="quick-search__label">
				<h4>QUICK</h4>
				<h2>SEARCH</h2>
			</div>

			<form class="quick-search__form">
				<div class="quick-search__fields">
					<div class="quick-search__group quick-search__group--main">
						<select>
						<option>Property Type</option>
						</select>
						<select>
						<option>Select city / zip</option>
						</select>
					</div>

				<div class="quick-search__group quick-search__group--filters">
					<select>
					<option>Beds</option>
					</select>
					<select>
					<option>Baths</option>
					</select>
					<select>
					<option>Min Price</option>
					</select>
					<select>
					<option>Max Price</option>
					</select>
				</div>
				</div>

				<div class="quick-search__actions">
				<div class="quick-search__buttons">
					<button type="submit" class="quick-search__button quick-search__button--search">
						<span>&rsaquo;</span> SEARCH
					</button>
					<button type="button" class="quick-search__button quick-search__button--advanced">
						<span>&rsaquo;</span> ADVANCED
					</button>
				</div>
				<p class="quick-search__powered-by">Real Estate IDX Powered By iHomeFinder</p>
				</div>
			</form>
			
			</div>
		</div>
	</section>


	<section class="performance">
		<div class="performance__header">
			<h3 class="performance__subtitle">proven</h3>
			<h2 class="performance__title">performance</h2>
		</div>

		<div class="performance__stats">
			<div class="performance__stat">
			<h2><span class="performance__counter counter" data-target="18">$0</span>M+</h2>
			<p class="performance__label">TOTAL SALES <br>VOLUME 2023</p>
			</div>

			<div class="performance__stat">
			<h2><span class="performance__counter counter" data-target="40">$0</span>M+</h2>
			<p class="performance__label">TOTAL SALES <br>VOLUME SINCE 2017</p>
			</div>

			<div class="performance__stat">
			<h2><span class="performance__counter counter" data-target="750">$0</span>K+</h2>
			<p class="performance__label">AVERAGE <br> SALE</p>
			</div>
		</div>
	</section>


	<section class="welcome">
		<div class="welcome__container">
			<div class="welcome__content">
				<h3 class="welcome__content__subtitle">Meet</h3>
				<h2 class="welcome__content__title">charlotte <span class="mobile-break"> brown</h2>
				<p class="welcome__content__description">
					Lighthouse Agent Group has grown from a team of three in a one-room office on Charleston, South Carolina to a global organization with over 300 employees on two continents. While a two-decade growth trajectory has changed the company in many ways, one value remains constant – this business is home and clients are treated like family.
				</p>

				<div class="welcome__content__button">
					<a href="/">get in touch</a>
				</div>
			</div>

			<div class="welcome__overlay">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/team.png" alt="">
			</div>
			
			<div class="welcome__media">
				<div class="welcome-card">
					<div class="welcome-card__photo">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/team.png" alt="">
					</div>

					<div class="welcome-card__caption">
						<div class="welcome-card__caption__text">
							<h3>Your Dream Home is a click away</h3>
						</div>

						<div class="welcome-card__caption__learn">
							<div class="welcome-card__caption__learn__icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="4" height="9" viewBox="0 0 4 9" fill="none">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M0 7.7476L3.08008 4.5L0 1.25223V0L4 4.5L0 9V7.7476Z" fill="#030303"/>
								</svg>
							</div>

							<div class="welcome-card__caption__learn__text">
								<h4>learn more</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> 

	<section class="splide property">
			<div class="property__title">
			<h3>FEATURED</h3>
			<h2>PROPERTIES</h2>
			</div>

			<div class="splide__track">
			<ul class="splide__list">
				<li class="splide__slide">
					<div class="property-card">
						<div class="property-img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/prop1.png" alt="Property Image">
						</div>
						<div class="description">
							<div class="price">
								<h3>$7,900,000</h3>
							</div>
							<div class="address">
								<p>3201 Brown Avenue Ext<br>Belton, SC 29627</p>
							</div>
							<div class="inclusion">
								<p>4 Beds | 5.5 Baths | 14,727 Sqft</p>
							</div>
						</div>
					</div>
				</li>

				<li class="splide__slide">
					<div class="property-card">
						<div class="property-img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/fort-mill.png" alt="Property Image">
						</div>
						<div class="description">
							<div class="price">
								<h3>$7,900,000</h3>
							</div>
							<div class="address">
								<p>3201 Brown Avenue Ext<br>Belton, SC 29627</p>
							</div>
							<div class="inclusion">
								<p>4 Beds | 5.5 Baths | 14,727 Sqft</p>
							</div>
						</div>
					</div>
				</li>

				<li class="splide__slide">
					<div class="property-card">
						<div class="property-img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/clemson.png" alt="Property Image">
						</div>
						<div class="description">
							<div class="price">
								<h3>$7,900,000</h3>
							</div>
							<div class="address">
								<p>3201 Brown Avenue Ext<br>Belton, SC 29627</p>
							</div>
							<div class="inclusion">
								<p>4 Beds | 5.5 Baths | 14,727 Sqft</p>
							</div>
						</div>
					</div>
				</li>

			</ul>
			</div>

			<div class="property__actions">
				<button class="property__actions--arrow prev" aria-label="Previous property">
					<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
					<rect x="-0.5" y="0.5" width="49" height="49" transform="matrix(-1 0 0 1 49 0)" fill="white" stroke="black"/>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M34.127 38.455L17.4764 25.0713L34.127 11.6875V10.8333L16.5514 25.0713L34.127 39.3093V38.455Z" fill="black"/>
					</svg>
				</button>
				
				<a href="/" class="property-btn">view all properties</a>

				<button class="property__actions--arrow next" aria-label="Next property">
					<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
					<rect x="0.5" y="0.5" width="49" height="49" fill="white" stroke="black"/>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M15.873 38.455L32.5236 25.0713L15.873 11.6875V10.8333L33.4486 25.0713L15.873 39.3093V38.455Z" fill="black"/>
					</svg>
				</button>
			</div>
	</section>

	<section class="communities">
		<div class="communities__container">
			<div class="communities__title">
			<h3>FEATURED</h3>
			<h2>Communities</h2>
			</div>

			<div class="communities__gallery">
			<div class="communities__card">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/fort-mill.png" alt="Fort Mill">
				<div class="communities__card__name">
					<p>Fort Mill</p>
				</div>
			</div>

			<div class="communities__card">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/clemson.png" alt="Clemson">
				<div class="communities__card__name">
				<p>Clemson</p>
				</div>
			</div>

			<div class="communities__card">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/oak.jpg" alt="Seven Oaks">
				<div class="communities__card__name">
				<p>Seven Oaks</p>
				</div>
			</div>

			<div class="communities__card">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pleasant.png" alt="Mount Pleasant">
				<div class="communities__card__name">
				<p>Mount Pleasant</p>
				</div>
			</div>

			<div class="communities__card">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cay.png" alt="Tega Cay">
				<div class="communities__card__name">
				<p>Tega Cay</p>
				</div>
			</div>

			<div class="communities__card">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/forks.png" alt="Five Forks">
				<div class="communities__card__name">
				<p>Five Forks</p>
				</div>
			</div>
			</div>

			<div class="communities__button">
			<a href="/">View All Communities</a>
			</div>
		</div>
	</section>


	<!-- <section class="splide testimonies">
		<div class="container">
			<div class="testimonies__inner">
				<img class="testimonies-bg" src="<?php echo get_template_directory_uri();?>/assets/images/testimony-bg.png" alt="">

				<div class="contents">
					<div class="contents__title">
						<h3>What our</h3>
						<h2>clients are <span class="mobile-break">saying</span></h2>
					</div>

					<div class="contents__cards">
						<div class="splide__track">
							<ul class="splide__list">
								<li class="splide__slide">
									<div class="contents__cards--card">
										<p>We never really believed in so-called real estate experts until we were introduced to Charlotte Brown. Like magicians, they made all of our dreams come true. Aside from being professional and experienced, Charlotte Brown proved to be very patient, creative, and persistent. They always accommodated our requests and questions. What a great real estate team!</p>
										<h6>bryan Cooper</h6>
									</div>
								</li>

								<li class="splide__slide">
									<div class="contents__cards--card">
										<p>We had no idea how smooth the home-buying process could be until we worked with Daniel Reyes. From start to finish, he was attentive, knowledgeable, and genuinely cared about what was best for us. Daniel didn’t just help us find a house—he helped us find our home. He’s thoughtful, resourceful, and always one step ahead. We couldn’t have asked for a better experience!</p>
										<h6>anna lee</h6>
									</div>
								</li>

								<li class="splide__slide">
									<div class="contents__cards--card">
										<p>We were blown away by Marcus Lee’s dedication and hustle. He made us feel like we were his top priority every step of the way. Whether it was late-night questions or last-minute viewings, Marcus showed up with enthusiasm and a plan. If you want someone reliable and results-driven, he’s the one. </p>
										<h6>John Cruz</h6>
									</div>
								</li>
							</ul>
						</div>
					</div>
					
					<div class="arrows">
					<div class="arrows__buttons">
						<button class="testimonies__arrows--arrow prev" aria-label="Previous testimony">
						<svg xmlns="http://www.w3.org/2000/svg" width="60" height="50" viewBox="0 0 49 50" fill="none">
							<rect x="0.5" y="0.5" width="48" height="49" stroke="white"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M33 35.417L17.8421 24.5551L33 13.6933V13L17 24.5551L33 36.1103V35.417Z" fill="white"/>
						</svg>
						</button>
						<button class="contents__arrows--arrow next" aria-label="Next testimony">
						<svg xmlns="http://www.w3.org/2000/svg" width="49" height="50" viewBox="0 0 49 50" fill="none">
							<rect x="0.5" y="0.5" width="48" height="49" stroke="white"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M17 35.417L32.1579 24.5551L17 13.6933V13L33 24.5551L17 36.1103V35.417Z" fill="white"/>
						</svg>
						</button>
					</div>
					<div class="arrows__learn">
						<a href="/">LEARN HOW WE MATCH OUR CLIENTS <span class="mobile-break">WITH THEIR DREAM HOMES</span></a>
					</div>
					</div>

				</div>
			</div>
		</div>
	</section> -->

	<section class="splide testimonies">
		<div class="testimonies__overlay">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/testimony-bg.png" alt="contact background">
		</div>		

		<div class="container">
			<div class="testimonies__inner">
				<img class="testimonies-bg" src="<?php echo get_template_directory_uri();?>/assets/images/testimony-bg.png" alt="">

				<div class="contents">
					<div class="contents__title">
						<h3>What our</h3>
						<h2>clients are <span class="mobile-break">saying</span></h2>
					</div>

					<div class="contents__cards">
						<div class="splide__track">
							<ul class="splide__list">
								<li class="splide__slide">
									<div class="contents__cards--card">
										<p>We never really believed in so-called real estate experts until we were introduced to Charlotte Brown. Like magicians, they made all of our dreams come true. Aside from being professional and experienced, Charlotte Brown proved to be very patient, creative, and persistent. They always accommodated our requests and questions. What a great real estate team!</p>
										<h6>bryan Cooper</h6>
									</div>
								</li>

								<li class="splide__slide">
									<div class="contents__cards--card">
										<p>We had no idea how smooth the home-buying process could be until we worked with Daniel Reyes. From start to finish, he was attentive, knowledgeable, and genuinely cared about what was best for us. Daniel didn’t just help us find a house—he helped us find our home. He’s thoughtful, resourceful, and always one step ahead. We couldn’t have asked for a better experience!</p>
										<h6>anna lee</h6>
									</div>
								</li>

								<li class="splide__slide">
									<div class="contents__cards--card">
										<p>We were blown away by Marcus Lee’s dedication and hustle. He made us feel like we were his top priority every step of the way. Whether it was late-night questions or last-minute viewings, Marcus showed up with enthusiasm and a plan. If you want someone reliable and results-driven, he’s the one. </p>
										<h6>John Cruz</h6>
									</div>
								</li>
							</ul>
						</div>
					</div>
					
					<div class="arrows">
					<div class="arrows__buttons">
						<button class="testimonies__arrows--arrow prev" aria-label="Previous testimony">
						<svg xmlns="http://www.w3.org/2000/svg" width="60" height="50" viewBox="0 0 49 50" fill="none">
							<rect x="0.5" y="0.5" width="48" height="49" stroke="white"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M33 35.417L17.8421 24.5551L33 13.6933V13L17 24.5551L33 36.1103V35.417Z" fill="white"/>
						</svg>
						</button>
						<button class="contents__arrows--arrow next" aria-label="Next testimony">
						<svg xmlns="http://www.w3.org/2000/svg" width="49" height="50" viewBox="0 0 49 50" fill="none">
							<rect x="0.5" y="0.5" width="48" height="49" stroke="white"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M17 35.417L32.1579 24.5551L17 13.6933V13L33 24.5551L17 36.1103V35.417Z" fill="white"/>
						</svg>
						</button>
					</div>
					<div class="arrows__learn">
						<a href="/">LEARN HOW WE MATCH OUR CLIENTS <span class="mobile-break">WITH THEIR DREAM HOMES</span></a>
					</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<!-- <section class="cta">
		<div class="cta__container">
			<div class="cta__cards">

			<div class="cta__card" style="--bg-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/cta1.jpg');">
				<div class="cta__card-content">
				<h4>LOOKING TO BUY?</h4>
				<p>We can help you navigate the journey with our Free Buyers Guide</p>
				</div>
			</div>

			<div class="cta__card" style="--bg-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/cta2.jpg');">
				<div class="cta__card-content">
				<h4>LOOKING TO SELL?</h4>
				<p>Our Free Sellers Guide can help you with what you need to know before jumping in</p>
				</div>
			</div>

			<div class="cta__card" style="--bg-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/cta1.jpg');">
				<div class="cta__card-content">
				<h4>Want to know the current value of your property?</h4>
				<p>Get a Free Home Valuation with the latest information</p>
				</div>
			</div>

			</div>
		</div>
	</section> -->

	<section class="cta">
    <div class="cta__container">
        <div class="cta__cards">

        <div class="cta__card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cta1.jpg" alt="Looking to Buy">
            <div class="cta__card-content">
            <h4>LOOKING TO BUY?</h4>
            <p>We can help you navigate the journey with our Free Buyers Guide</p>
            </div>
        </div>

        <div class="cta__card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cta2.jpg" alt="Looking to Sell">
            <div class="cta__card-content">
            <h4>LOOKING TO SELL?</h4>
            <p>Our Free Sellers Guide can help you with what you need to know before jumping in</p>
            </div>
        </div>

        <div class="cta__card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cta1.jpg" alt="Home Valuation">
            <div class="cta__card-content">
            <h4>Want to know the current value of your property?</h4>
            <p>Get a Free Home Valuation with the latest information</p>
            </div>
        </div>

        </div>
    </div>
</section>



	<section class="news">
		<div class="container">
			<div class="news__title">
				<h3>latest</h3>
				<h2>news</h2>
			</div>

			<div class="news__content">
			<div class="news__content-row news__content-row--primary">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/news1.jpg" alt="">
				<div class="news__caption news__caption--highlight">
				<h3>Get in touch and start saving tomorrow</h3>
				<div class="news__link">
					<div class="news__link-vector">
					<svg xmlns="http://www.w3.org/2000/svg" width="5" height="8" viewBox="0 0 5 8" fill="none">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M0 6.88675L3.8501 4L0 1.11309V0L5 4L0 8V6.88675Z" fill="white"/>
					</svg>
					<span class="news__link-line"></span>
					</div>
					<a href="/">Learn <br> More</a>
				</div>
				</div>
			</div>

			<div class="news__content-row news__content-row--grid">
				<div class="news__card">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/news2.png" alt="">
				<div class="news__caption">
					<h4>Tips for First-Time Homebuyers</h4>
					<a href="/">read all</a>
				</div>
				</div>

				<div class="news__card">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/news3.png" alt="">
				<div class="news__caption">
					<h4>Signs that Now is the Time to Sell Your Home</h4>
				</div>
				</div>

				<div class="news__card">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/news4.png" alt="">
				<div class="news__caption">
					<h4>Remodeling Projects That Will Boost Your Home’s Value</h4>
				</div>
				</div>

				<div class="news__card">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/news5.png" alt="">
				<div class="news__caption">
					<h4>Navigating the Real Estate Maze: A Beginner's Guide to Buying and Selling Homes</h4>
				</div>
				</div>
			</div>
			</div>
		</div>
	</section>

	
	<section class="socials">
		<div class="container">
			<div class="socials__title">
				<div class="socials__title--text">
					<h3>follow us on</h3>
					<h2>social media</h2>
				</div>

				<div class="socials__title--icons">
					<div class="facebook">
						<svg xmlns="http://www.w3.org/2000/svg" width="10" height="14" viewBox="0 0 10 14" fill="none">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M3.78529 7.43105V14H6.35711V7.43105H8.88092L9 5.06518H6.35711V3.44559V3.33538C6.35711 2.97485 6.4253 2.71146 6.56167 2.5424C6.69708 2.37427 6.96886 2.29021 7.37701 2.29021C7.91576 2.29021 8.43339 2.29208 8.92989 2.29675L8.98656 0.0887317L8.77528 0.0691174C8.63507 0.0551071 8.42187 0.0392288 8.13568 0.0233505C7.8495 0.00747214 7.56139 0 7.27137 0C6.68555 0 6.16408 0.0840616 5.70696 0.249383C5.25079 0.415638 4.8849 0.642605 4.6112 0.929348C4.33653 1.21703 4.13006 1.53833 3.99177 1.89699C3.85444 2.25565 3.78529 2.6358 3.78529 3.04116V5.06518H2V7.43105H3.78529Z" fill="black"/>
						</svg>
					</div>
					
					<div class="instagram">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
						<g clip-path="url(#clip0_4066_112)">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M15.0604 10.5869C15.0234 11.3829 14.8974 11.9279 14.7114 12.4049C14.5204 12.8969 14.2644 13.3149 13.8474 13.7319C13.4314 14.1479 13.0134 14.4039 12.5204 14.5959C12.0434 14.7809 11.4994 14.9079 10.7014 14.9439C9.90238 14.9799 9.64738 14.9889 7.61238 14.9889C5.57738 14.9889 5.32238 14.9799 4.52238 14.9439C3.72538 14.9079 3.18038 14.7809 2.70438 14.5959C2.21138 14.4039 1.79338 14.1479 1.37738 13.7319C0.960385 13.3149 0.704385 12.8969 0.512385 12.4049C0.327385 11.9279 0.200385 11.3829 0.164385 10.5869C0.127385 9.78693 0.119385 9.53193 0.119385 7.49493C0.119385 5.46193 0.127385 5.20693 0.164385 4.40793C0.200385 3.60893 0.327385 3.06493 0.512385 2.58793C0.704385 2.09593 0.960385 1.67693 1.37738 1.26093C1.79338 0.84393 2.21138 0.58793 2.70438 0.39593C3.18038 0.21193 3.72538 0.0849297 4.52238 0.0479297C5.32238 0.0119297 5.57738 0.00292969 7.61238 0.00292969C9.64738 0.00292969 9.90238 0.0119297 10.7014 0.0479297C11.4994 0.0849297 12.0434 0.21193 12.5204 0.39593C13.0134 0.58793 13.4314 0.84393 13.8474 1.26093C14.2644 1.67693 14.5204 2.09593 14.7114 2.58793C14.8974 3.06493 15.0234 3.60893 15.0604 4.40793C15.0964 5.20693 15.1054 5.46193 15.1054 7.49493C15.1054 9.53193 15.0964 9.78693 15.0604 10.5869ZM13.7114 4.46793C13.6784 3.73793 13.5564 3.34093 13.4534 3.07693C13.3174 2.72793 13.1554 2.47693 12.8924 2.21493C12.6304 1.95293 12.3814 1.78993 12.0314 1.65493C11.7674 1.55193 11.3704 1.42993 10.6404 1.39593C9.85038 1.36093 9.61338 1.35393 7.61238 1.35393C5.61138 1.35393 5.37438 1.36093 4.58438 1.39593C3.85338 1.42993 3.45738 1.55193 3.19338 1.65493C2.84338 1.78993 2.59338 1.95293 2.33138 2.21493C2.06938 2.47693 1.90738 2.72793 1.77138 3.07693C1.66838 3.34093 1.54638 3.73793 1.51338 4.46793C1.47738 5.25893 1.46938 5.49593 1.46938 7.49493C1.46938 9.49693 1.47738 9.73393 1.51338 10.5239C1.54638 11.2549 1.66838 11.6499 1.77138 11.9149C1.90738 12.2649 2.06938 12.5149 2.33138 12.7769C2.59338 13.0379 2.84338 13.1999 3.19338 13.3389C3.45738 13.4399 3.85338 13.5619 4.58438 13.5949C5.37438 13.6309 5.61138 13.6399 7.61238 13.6399C9.61338 13.6399 9.85038 13.6309 10.6404 13.5949C11.3704 13.5619 11.7674 13.4399 12.0314 13.3389C12.3814 13.1999 12.6304 13.0379 12.8924 12.7769C13.1554 12.5149 13.3174 12.2649 13.4534 11.9149C13.5564 11.6499 13.6784 11.2549 13.7114 10.5239C13.7474 9.73393 13.7554 9.49693 13.7554 7.49493C13.7554 5.49593 13.7474 5.25893 13.7114 4.46793ZM11.6124 4.39493C11.1154 4.39493 10.7124 3.99293 10.7124 3.49693C10.7124 3.00093 11.1154 2.59593 11.6124 2.59593C12.1084 2.59593 12.5114 3.00093 12.5114 3.49693C12.5114 3.99293 12.1084 4.39493 11.6124 4.39493ZM7.61238 11.3439C5.48738 11.3439 3.76438 9.62093 3.76438 7.49493C3.76438 5.37193 5.48738 3.64893 7.61238 3.64893C9.73738 3.64893 11.4604 5.37193 11.4604 7.49493C11.4604 9.62093 9.73738 11.3439 7.61238 11.3439ZM7.61238 4.99793C6.23238 4.99793 5.11438 6.11793 5.11438 7.49493C5.11438 8.87593 6.23238 9.99293 7.61238 9.99293C8.99138 9.99293 10.1094 8.87593 10.1094 7.49493C10.1094 6.11793 8.99138 4.99793 7.61238 4.99793Z" fill="black"/>
						</g>
						<defs>
							<clipPath id="clip0_4066_112">
							<rect width="15" height="15" fill="white" transform="translate(0.109375)"/>
							</clipPath>
						</defs>
						</svg>
					</div>
				</div>
			</div>

			<div class="socials__video">
				<div class="video-wrapper">
					<video id="customVideo" poster="" preload="metadata" muted playsinline>
					<source src="<?php echo get_template_directory_uri(); ?>/assets/images/social-vid.mp4" type="video/mp4">
					Your browser does not support the video tag.
					</video>

					<!-- Play button overlay -->
					<div class="play-button" id="customPlayBtn">
					<svg xmlns="http://www.w3.org/2000/svg" width="125" height="125" viewBox="0 0 125 125" fill="none">
						<circle cx="62.5" cy="62.5" r="62" stroke="white"/>
						<path d="M89 62.5L49.25 85.4497L49.25 39.5503L89 62.5Z" fill="white"/>
					</svg>
					</div>
				</div>
			</div>

			<div class="socials__posts">
				<div class="socials__posts--row1">
					<div class="social-card-primary">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/insta1.jpg" alt="">
						<div class="insta-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
							<g clip-path="url(#clip0_4066_100)">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.5398 9.04C12.5095 9.68793 12.4063 10.1315 12.2539 10.5198C12.0974 10.9203 11.8876 11.2605 11.546 11.6C11.2051 11.9386 10.8626 12.147 10.4587 12.3033C10.0679 12.4538 9.62217 12.5572 8.96833 12.5865C8.31368 12.6158 8.10475 12.6231 6.4374 12.6231C4.77004 12.6231 4.56111 12.6158 3.90564 12.5865C3.25263 12.5572 2.80609 12.4538 2.41609 12.3033C2.01215 12.147 1.66967 11.9386 1.32882 11.6C0.987159 11.2605 0.777409 10.9203 0.620096 10.5198C0.468518 10.1315 0.364462 9.68793 0.334966 9.04C0.30465 8.38881 0.298096 8.18124 0.298096 6.52316C0.298096 4.86834 0.30465 4.66077 0.334966 4.0104C0.364462 3.36003 0.468518 2.91722 0.620096 2.52895C0.777409 2.12847 0.987159 1.78741 1.32882 1.44879C1.66967 1.10936 2.01215 0.900984 2.41609 0.7447C2.80609 0.594927 3.25263 0.491551 3.90564 0.461434C4.56111 0.432131 4.77004 0.424805 6.4374 0.424805C8.10475 0.424805 8.31368 0.432131 8.96833 0.461434C9.62217 0.491551 10.0679 0.594927 10.4587 0.7447C10.8626 0.900984 11.2051 1.10936 11.546 1.44879C11.8876 1.78741 12.0974 2.12847 12.2539 2.52895C12.4063 2.91722 12.5095 3.36003 12.5398 4.0104C12.5693 4.66077 12.5767 4.86834 12.5767 6.52316C12.5767 8.18124 12.5693 8.38881 12.5398 9.04ZM11.4345 4.05924C11.4075 3.46503 11.3075 3.14188 11.2232 2.92699C11.1117 2.64291 10.979 2.4386 10.7635 2.22533C10.5488 2.01207 10.3448 1.87939 10.0581 1.7695C9.84175 1.68566 9.51647 1.58636 8.91835 1.55868C8.27108 1.53019 8.07689 1.5245 6.4374 1.5245C4.7979 1.5245 4.60372 1.53019 3.95644 1.55868C3.3575 1.58636 3.03305 1.68566 2.81674 1.7695C2.52997 1.87939 2.32514 2.01207 2.11047 2.22533C1.89581 2.4386 1.76307 2.64291 1.65164 2.92699C1.56725 3.14188 1.46729 3.46503 1.44025 4.05924C1.41076 4.7031 1.4042 4.89601 1.4042 6.52316C1.4042 8.15276 1.41076 8.34567 1.44025 8.98872C1.46729 9.58374 1.56725 9.90526 1.65164 10.121C1.76307 10.4059 1.89581 10.6094 2.11047 10.8226C2.32514 11.0351 2.52997 11.1669 2.81674 11.2801C3.03305 11.3623 3.3575 11.4616 3.95644 11.4885C4.60372 11.5178 4.7979 11.5251 6.4374 11.5251C8.07689 11.5251 8.27108 11.5178 8.91835 11.4885C9.51647 11.4616 9.84175 11.3623 10.0581 11.2801C10.3448 11.1669 10.5488 11.0351 10.7635 10.8226C10.979 10.6094 11.1117 10.4059 11.2232 10.121C11.3075 9.90526 11.4075 9.58374 11.4345 8.98872C11.464 8.34567 11.4706 8.15276 11.4706 6.52316C11.4706 4.89601 11.464 4.7031 11.4345 4.05924ZM9.71475 3.99982C9.30754 3.99982 8.97735 3.6726 8.97735 3.26886C8.97735 2.86512 9.30754 2.53546 9.71475 2.53546C10.1211 2.53546 10.4513 2.86512 10.4513 3.26886C10.4513 3.6726 10.1211 3.99982 9.71475 3.99982ZM6.4374 9.65618C4.6963 9.65618 3.28458 8.25369 3.28458 6.52316C3.28458 4.79508 4.6963 3.39259 6.4374 3.39259C8.17849 3.39259 9.59021 4.79508 9.59021 6.52316C9.59021 8.25369 8.17849 9.65618 6.4374 9.65618ZM6.4374 4.49065C5.30671 4.49065 4.39069 5.40231 4.39069 6.52316C4.39069 7.64727 5.30671 8.55649 6.4374 8.55649C7.56727 8.55649 8.48329 7.64727 8.48329 6.52316C8.48329 5.40231 7.56727 4.49065 6.4374 4.49065Z" fill="white"/>
							</g>
							<defs>
								<clipPath id="clip0_4066_100">
								<rect width="12.2901" height="12.2097" fill="white" transform="translate(0.290039 0.422852)"/>
								</clipPath>
							</defs>
							</svg>
						</div>
					</div>

				</div>

				<div class="socials__posts--row2">
					<div class="social-card">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/insta1.jpg" alt="">
						<div class="insta-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
							<g clip-path="url(#clip0_4066_100)">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.5398 9.04C12.5095 9.68793 12.4063 10.1315 12.2539 10.5198C12.0974 10.9203 11.8876 11.2605 11.546 11.6C11.2051 11.9386 10.8626 12.147 10.4587 12.3033C10.0679 12.4538 9.62217 12.5572 8.96833 12.5865C8.31368 12.6158 8.10475 12.6231 6.4374 12.6231C4.77004 12.6231 4.56111 12.6158 3.90564 12.5865C3.25263 12.5572 2.80609 12.4538 2.41609 12.3033C2.01215 12.147 1.66967 11.9386 1.32882 11.6C0.987159 11.2605 0.777409 10.9203 0.620096 10.5198C0.468518 10.1315 0.364462 9.68793 0.334966 9.04C0.30465 8.38881 0.298096 8.18124 0.298096 6.52316C0.298096 4.86834 0.30465 4.66077 0.334966 4.0104C0.364462 3.36003 0.468518 2.91722 0.620096 2.52895C0.777409 2.12847 0.987159 1.78741 1.32882 1.44879C1.66967 1.10936 2.01215 0.900984 2.41609 0.7447C2.80609 0.594927 3.25263 0.491551 3.90564 0.461434C4.56111 0.432131 4.77004 0.424805 6.4374 0.424805C8.10475 0.424805 8.31368 0.432131 8.96833 0.461434C9.62217 0.491551 10.0679 0.594927 10.4587 0.7447C10.8626 0.900984 11.2051 1.10936 11.546 1.44879C11.8876 1.78741 12.0974 2.12847 12.2539 2.52895C12.4063 2.91722 12.5095 3.36003 12.5398 4.0104C12.5693 4.66077 12.5767 4.86834 12.5767 6.52316C12.5767 8.18124 12.5693 8.38881 12.5398 9.04ZM11.4345 4.05924C11.4075 3.46503 11.3075 3.14188 11.2232 2.92699C11.1117 2.64291 10.979 2.4386 10.7635 2.22533C10.5488 2.01207 10.3448 1.87939 10.0581 1.7695C9.84175 1.68566 9.51647 1.58636 8.91835 1.55868C8.27108 1.53019 8.07689 1.5245 6.4374 1.5245C4.7979 1.5245 4.60372 1.53019 3.95644 1.55868C3.3575 1.58636 3.03305 1.68566 2.81674 1.7695C2.52997 1.87939 2.32514 2.01207 2.11047 2.22533C1.89581 2.4386 1.76307 2.64291 1.65164 2.92699C1.56725 3.14188 1.46729 3.46503 1.44025 4.05924C1.41076 4.7031 1.4042 4.89601 1.4042 6.52316C1.4042 8.15276 1.41076 8.34567 1.44025 8.98872C1.46729 9.58374 1.56725 9.90526 1.65164 10.121C1.76307 10.4059 1.89581 10.6094 2.11047 10.8226C2.32514 11.0351 2.52997 11.1669 2.81674 11.2801C3.03305 11.3623 3.3575 11.4616 3.95644 11.4885C4.60372 11.5178 4.7979 11.5251 6.4374 11.5251C8.07689 11.5251 8.27108 11.5178 8.91835 11.4885C9.51647 11.4616 9.84175 11.3623 10.0581 11.2801C10.3448 11.1669 10.5488 11.0351 10.7635 10.8226C10.979 10.6094 11.1117 10.4059 11.2232 10.121C11.3075 9.90526 11.4075 9.58374 11.4345 8.98872C11.464 8.34567 11.4706 8.15276 11.4706 6.52316C11.4706 4.89601 11.464 4.7031 11.4345 4.05924ZM9.71475 3.99982C9.30754 3.99982 8.97735 3.6726 8.97735 3.26886C8.97735 2.86512 9.30754 2.53546 9.71475 2.53546C10.1211 2.53546 10.4513 2.86512 10.4513 3.26886C10.4513 3.6726 10.1211 3.99982 9.71475 3.99982ZM6.4374 9.65618C4.6963 9.65618 3.28458 8.25369 3.28458 6.52316C3.28458 4.79508 4.6963 3.39259 6.4374 3.39259C8.17849 3.39259 9.59021 4.79508 9.59021 6.52316C9.59021 8.25369 8.17849 9.65618 6.4374 9.65618ZM6.4374 4.49065C5.30671 4.49065 4.39069 5.40231 4.39069 6.52316C4.39069 7.64727 5.30671 8.55649 6.4374 8.55649C7.56727 8.55649 8.48329 7.64727 8.48329 6.52316C8.48329 5.40231 7.56727 4.49065 6.4374 4.49065Z" fill="white"/>
							</g>
							<defs>
								<clipPath id="clip0_4066_100">
								<rect width="12.2901" height="12.2097" fill="white" transform="translate(0.290039 0.422852)"/>
								</clipPath>
							</defs>
							</svg>
						</div>
					</div>

					<div class="social-card">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/insta2.jpg" alt="">
						<div class="insta-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
							<g clip-path="url(#clip0_4066_100)">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.5398 9.04C12.5095 9.68793 12.4063 10.1315 12.2539 10.5198C12.0974 10.9203 11.8876 11.2605 11.546 11.6C11.2051 11.9386 10.8626 12.147 10.4587 12.3033C10.0679 12.4538 9.62217 12.5572 8.96833 12.5865C8.31368 12.6158 8.10475 12.6231 6.4374 12.6231C4.77004 12.6231 4.56111 12.6158 3.90564 12.5865C3.25263 12.5572 2.80609 12.4538 2.41609 12.3033C2.01215 12.147 1.66967 11.9386 1.32882 11.6C0.987159 11.2605 0.777409 10.9203 0.620096 10.5198C0.468518 10.1315 0.364462 9.68793 0.334966 9.04C0.30465 8.38881 0.298096 8.18124 0.298096 6.52316C0.298096 4.86834 0.30465 4.66077 0.334966 4.0104C0.364462 3.36003 0.468518 2.91722 0.620096 2.52895C0.777409 2.12847 0.987159 1.78741 1.32882 1.44879C1.66967 1.10936 2.01215 0.900984 2.41609 0.7447C2.80609 0.594927 3.25263 0.491551 3.90564 0.461434C4.56111 0.432131 4.77004 0.424805 6.4374 0.424805C8.10475 0.424805 8.31368 0.432131 8.96833 0.461434C9.62217 0.491551 10.0679 0.594927 10.4587 0.7447C10.8626 0.900984 11.2051 1.10936 11.546 1.44879C11.8876 1.78741 12.0974 2.12847 12.2539 2.52895C12.4063 2.91722 12.5095 3.36003 12.5398 4.0104C12.5693 4.66077 12.5767 4.86834 12.5767 6.52316C12.5767 8.18124 12.5693 8.38881 12.5398 9.04ZM11.4345 4.05924C11.4075 3.46503 11.3075 3.14188 11.2232 2.92699C11.1117 2.64291 10.979 2.4386 10.7635 2.22533C10.5488 2.01207 10.3448 1.87939 10.0581 1.7695C9.84175 1.68566 9.51647 1.58636 8.91835 1.55868C8.27108 1.53019 8.07689 1.5245 6.4374 1.5245C4.7979 1.5245 4.60372 1.53019 3.95644 1.55868C3.3575 1.58636 3.03305 1.68566 2.81674 1.7695C2.52997 1.87939 2.32514 2.01207 2.11047 2.22533C1.89581 2.4386 1.76307 2.64291 1.65164 2.92699C1.56725 3.14188 1.46729 3.46503 1.44025 4.05924C1.41076 4.7031 1.4042 4.89601 1.4042 6.52316C1.4042 8.15276 1.41076 8.34567 1.44025 8.98872C1.46729 9.58374 1.56725 9.90526 1.65164 10.121C1.76307 10.4059 1.89581 10.6094 2.11047 10.8226C2.32514 11.0351 2.52997 11.1669 2.81674 11.2801C3.03305 11.3623 3.3575 11.4616 3.95644 11.4885C4.60372 11.5178 4.7979 11.5251 6.4374 11.5251C8.07689 11.5251 8.27108 11.5178 8.91835 11.4885C9.51647 11.4616 9.84175 11.3623 10.0581 11.2801C10.3448 11.1669 10.5488 11.0351 10.7635 10.8226C10.979 10.6094 11.1117 10.4059 11.2232 10.121C11.3075 9.90526 11.4075 9.58374 11.4345 8.98872C11.464 8.34567 11.4706 8.15276 11.4706 6.52316C11.4706 4.89601 11.464 4.7031 11.4345 4.05924ZM9.71475 3.99982C9.30754 3.99982 8.97735 3.6726 8.97735 3.26886C8.97735 2.86512 9.30754 2.53546 9.71475 2.53546C10.1211 2.53546 10.4513 2.86512 10.4513 3.26886C10.4513 3.6726 10.1211 3.99982 9.71475 3.99982ZM6.4374 9.65618C4.6963 9.65618 3.28458 8.25369 3.28458 6.52316C3.28458 4.79508 4.6963 3.39259 6.4374 3.39259C8.17849 3.39259 9.59021 4.79508 9.59021 6.52316C9.59021 8.25369 8.17849 9.65618 6.4374 9.65618ZM6.4374 4.49065C5.30671 4.49065 4.39069 5.40231 4.39069 6.52316C4.39069 7.64727 5.30671 8.55649 6.4374 8.55649C7.56727 8.55649 8.48329 7.64727 8.48329 6.52316C8.48329 5.40231 7.56727 4.49065 6.4374 4.49065Z" fill="white"/>
							</g>
							<defs>
								<clipPath id="clip0_4066_100">
								<rect width="12.2901" height="12.2097" fill="white" transform="translate(0.290039 0.422852)"/>
								</clipPath>
							</defs>
							</svg>
						</div>
					</div>

					<div class="social-card">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/insta3.jpg" alt="">
						<div class="insta-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
							<g clip-path="url(#clip0_4066_100)">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.5398 9.04C12.5095 9.68793 12.4063 10.1315 12.2539 10.5198C12.0974 10.9203 11.8876 11.2605 11.546 11.6C11.2051 11.9386 10.8626 12.147 10.4587 12.3033C10.0679 12.4538 9.62217 12.5572 8.96833 12.5865C8.31368 12.6158 8.10475 12.6231 6.4374 12.6231C4.77004 12.6231 4.56111 12.6158 3.90564 12.5865C3.25263 12.5572 2.80609 12.4538 2.41609 12.3033C2.01215 12.147 1.66967 11.9386 1.32882 11.6C0.987159 11.2605 0.777409 10.9203 0.620096 10.5198C0.468518 10.1315 0.364462 9.68793 0.334966 9.04C0.30465 8.38881 0.298096 8.18124 0.298096 6.52316C0.298096 4.86834 0.30465 4.66077 0.334966 4.0104C0.364462 3.36003 0.468518 2.91722 0.620096 2.52895C0.777409 2.12847 0.987159 1.78741 1.32882 1.44879C1.66967 1.10936 2.01215 0.900984 2.41609 0.7447C2.80609 0.594927 3.25263 0.491551 3.90564 0.461434C4.56111 0.432131 4.77004 0.424805 6.4374 0.424805C8.10475 0.424805 8.31368 0.432131 8.96833 0.461434C9.62217 0.491551 10.0679 0.594927 10.4587 0.7447C10.8626 0.900984 11.2051 1.10936 11.546 1.44879C11.8876 1.78741 12.0974 2.12847 12.2539 2.52895C12.4063 2.91722 12.5095 3.36003 12.5398 4.0104C12.5693 4.66077 12.5767 4.86834 12.5767 6.52316C12.5767 8.18124 12.5693 8.38881 12.5398 9.04ZM11.4345 4.05924C11.4075 3.46503 11.3075 3.14188 11.2232 2.92699C11.1117 2.64291 10.979 2.4386 10.7635 2.22533C10.5488 2.01207 10.3448 1.87939 10.0581 1.7695C9.84175 1.68566 9.51647 1.58636 8.91835 1.55868C8.27108 1.53019 8.07689 1.5245 6.4374 1.5245C4.7979 1.5245 4.60372 1.53019 3.95644 1.55868C3.3575 1.58636 3.03305 1.68566 2.81674 1.7695C2.52997 1.87939 2.32514 2.01207 2.11047 2.22533C1.89581 2.4386 1.76307 2.64291 1.65164 2.92699C1.56725 3.14188 1.46729 3.46503 1.44025 4.05924C1.41076 4.7031 1.4042 4.89601 1.4042 6.52316C1.4042 8.15276 1.41076 8.34567 1.44025 8.98872C1.46729 9.58374 1.56725 9.90526 1.65164 10.121C1.76307 10.4059 1.89581 10.6094 2.11047 10.8226C2.32514 11.0351 2.52997 11.1669 2.81674 11.2801C3.03305 11.3623 3.3575 11.4616 3.95644 11.4885C4.60372 11.5178 4.7979 11.5251 6.4374 11.5251C8.07689 11.5251 8.27108 11.5178 8.91835 11.4885C9.51647 11.4616 9.84175 11.3623 10.0581 11.2801C10.3448 11.1669 10.5488 11.0351 10.7635 10.8226C10.979 10.6094 11.1117 10.4059 11.2232 10.121C11.3075 9.90526 11.4075 9.58374 11.4345 8.98872C11.464 8.34567 11.4706 8.15276 11.4706 6.52316C11.4706 4.89601 11.464 4.7031 11.4345 4.05924ZM9.71475 3.99982C9.30754 3.99982 8.97735 3.6726 8.97735 3.26886C8.97735 2.86512 9.30754 2.53546 9.71475 2.53546C10.1211 2.53546 10.4513 2.86512 10.4513 3.26886C10.4513 3.6726 10.1211 3.99982 9.71475 3.99982ZM6.4374 9.65618C4.6963 9.65618 3.28458 8.25369 3.28458 6.52316C3.28458 4.79508 4.6963 3.39259 6.4374 3.39259C8.17849 3.39259 9.59021 4.79508 9.59021 6.52316C9.59021 8.25369 8.17849 9.65618 6.4374 9.65618ZM6.4374 4.49065C5.30671 4.49065 4.39069 5.40231 4.39069 6.52316C4.39069 7.64727 5.30671 8.55649 6.4374 8.55649C7.56727 8.55649 8.48329 7.64727 8.48329 6.52316C8.48329 5.40231 7.56727 4.49065 6.4374 4.49065Z" fill="white"/>
							</g>
							<defs>
								<clipPath id="clip0_4066_100">
								<rect width="12.2901" height="12.2097" fill="white" transform="translate(0.290039 0.422852)"/>
								</clipPath>
							</defs>
							</svg>
						</div>
					</div>

					<div class="social-card">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/insta4.jpg" alt="">
						<div class="insta-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
							<g clip-path="url(#clip0_4066_100)">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.5398 9.04C12.5095 9.68793 12.4063 10.1315 12.2539 10.5198C12.0974 10.9203 11.8876 11.2605 11.546 11.6C11.2051 11.9386 10.8626 12.147 10.4587 12.3033C10.0679 12.4538 9.62217 12.5572 8.96833 12.5865C8.31368 12.6158 8.10475 12.6231 6.4374 12.6231C4.77004 12.6231 4.56111 12.6158 3.90564 12.5865C3.25263 12.5572 2.80609 12.4538 2.41609 12.3033C2.01215 12.147 1.66967 11.9386 1.32882 11.6C0.987159 11.2605 0.777409 10.9203 0.620096 10.5198C0.468518 10.1315 0.364462 9.68793 0.334966 9.04C0.30465 8.38881 0.298096 8.18124 0.298096 6.52316C0.298096 4.86834 0.30465 4.66077 0.334966 4.0104C0.364462 3.36003 0.468518 2.91722 0.620096 2.52895C0.777409 2.12847 0.987159 1.78741 1.32882 1.44879C1.66967 1.10936 2.01215 0.900984 2.41609 0.7447C2.80609 0.594927 3.25263 0.491551 3.90564 0.461434C4.56111 0.432131 4.77004 0.424805 6.4374 0.424805C8.10475 0.424805 8.31368 0.432131 8.96833 0.461434C9.62217 0.491551 10.0679 0.594927 10.4587 0.7447C10.8626 0.900984 11.2051 1.10936 11.546 1.44879C11.8876 1.78741 12.0974 2.12847 12.2539 2.52895C12.4063 2.91722 12.5095 3.36003 12.5398 4.0104C12.5693 4.66077 12.5767 4.86834 12.5767 6.52316C12.5767 8.18124 12.5693 8.38881 12.5398 9.04ZM11.4345 4.05924C11.4075 3.46503 11.3075 3.14188 11.2232 2.92699C11.1117 2.64291 10.979 2.4386 10.7635 2.22533C10.5488 2.01207 10.3448 1.87939 10.0581 1.7695C9.84175 1.68566 9.51647 1.58636 8.91835 1.55868C8.27108 1.53019 8.07689 1.5245 6.4374 1.5245C4.7979 1.5245 4.60372 1.53019 3.95644 1.55868C3.3575 1.58636 3.03305 1.68566 2.81674 1.7695C2.52997 1.87939 2.32514 2.01207 2.11047 2.22533C1.89581 2.4386 1.76307 2.64291 1.65164 2.92699C1.56725 3.14188 1.46729 3.46503 1.44025 4.05924C1.41076 4.7031 1.4042 4.89601 1.4042 6.52316C1.4042 8.15276 1.41076 8.34567 1.44025 8.98872C1.46729 9.58374 1.56725 9.90526 1.65164 10.121C1.76307 10.4059 1.89581 10.6094 2.11047 10.8226C2.32514 11.0351 2.52997 11.1669 2.81674 11.2801C3.03305 11.3623 3.3575 11.4616 3.95644 11.4885C4.60372 11.5178 4.7979 11.5251 6.4374 11.5251C8.07689 11.5251 8.27108 11.5178 8.91835 11.4885C9.51647 11.4616 9.84175 11.3623 10.0581 11.2801C10.3448 11.1669 10.5488 11.0351 10.7635 10.8226C10.979 10.6094 11.1117 10.4059 11.2232 10.121C11.3075 9.90526 11.4075 9.58374 11.4345 8.98872C11.464 8.34567 11.4706 8.15276 11.4706 6.52316C11.4706 4.89601 11.464 4.7031 11.4345 4.05924ZM9.71475 3.99982C9.30754 3.99982 8.97735 3.6726 8.97735 3.26886C8.97735 2.86512 9.30754 2.53546 9.71475 2.53546C10.1211 2.53546 10.4513 2.86512 10.4513 3.26886C10.4513 3.6726 10.1211 3.99982 9.71475 3.99982ZM6.4374 9.65618C4.6963 9.65618 3.28458 8.25369 3.28458 6.52316C3.28458 4.79508 4.6963 3.39259 6.4374 3.39259C8.17849 3.39259 9.59021 4.79508 9.59021 6.52316C9.59021 8.25369 8.17849 9.65618 6.4374 9.65618ZM6.4374 4.49065C5.30671 4.49065 4.39069 5.40231 4.39069 6.52316C4.39069 7.64727 5.30671 8.55649 6.4374 8.55649C7.56727 8.55649 8.48329 7.64727 8.48329 6.52316C8.48329 5.40231 7.56727 4.49065 6.4374 4.49065Z" fill="white"/>
							</g>
							<defs>
								<clipPath id="clip0_4066_100">
								<rect width="12.2901" height="12.2097" fill="white" transform="translate(0.290039 0.422852)"/>
								</clipPath>
							</defs>
							</svg>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section class="contact">
		<img src="<?php echo get_template_directory_uri();?>/assets/images/contact-bg.jpg" alt="contact background">
		<div class="container">
			<div class="contact__title">
			<h1>contact us</h1>
			<p>
				Lighthouse Agent Group is one of the world's most successful real estate agents and has helped hundreds of buyers find their dream home in Los Angeles and Beverly Hills, resulting in over $2 Billion of closed real estate transactions.
			</p>
			</div>

			<div class="contact__form">
			<div class="contact__form-group">
				<input type="text" placeholder="First Name">
				<input type="text" placeholder="Last Name">
				<input type="email" placeholder="Phone Number">
				<input type="tel" placeholder="Email Address">
			</div>
			<div class="contact__form-extra">
				<textarea placeholder="Message"></textarea>
				<label>
				<input type="checkbox" name="subscribe">
					<span>Stay in touch with Lighthouse agent group's exclusive newsletter.</span>
				</label>
			</div>
			</div>

			<div class="contact__button">
			<a href="/submit">submit</a>
			</div>
		</div>
	</section>

<?php get_footer(); ?>


