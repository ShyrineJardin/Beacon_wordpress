<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta id="viewport-tag" name="viewport" content="width=device-width, initial-scale=1"/>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php if ( has_action( 'aios_seotools_gtm_body' ) ) { do_action('aios_seotools_gtm_body'); } ?>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Mobile Header") ) : ?><?php endif ?>


	<div id="main-wrapper">

	<header class="header">
		<div class="navwrap">
			<div class="container">
				<div class="header__logo">
						<a href="/"><img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt=""></a>		
				</div>

				<div class="header__nav">
					<nav>
							<?php wp_nav_menu( array(
								'theme_location' => 'primary-menu',
								'menu_id' => 'nav',
								'sort_column' => 'menu_order',
								'container' => false
							) ); ?>
							</nav>
				</div>

				
				<div class="header__contact">
					<div class="header__contact--search">
						<svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
							<circle cx="21" cy="21" r="20.5" stroke="white"/>
							<g transform="translate(10, 10) scale(1.4)">
							<g clip-path="url(#clip0)">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M11.3595 10.4163C12.181 9.38935 12.6722 8.08675 12.6722 6.66942C12.6722 3.3542 9.98468 0.666687 6.66948 0.666687C3.35426 0.666687 0.666748 3.3542 0.666748 6.66942C0.666748 9.98462 3.35426 12.6722 6.66948 12.6722C8.08681 12.6722 9.38941 12.181 10.4163 11.3595L14.1948 15.138C14.4553 15.3985 14.8776 15.3985 15.1381 15.138C15.3985 14.8776 15.3985 14.4552 15.1381 14.1948L11.3595 10.4163ZM6.66948 11.3449C4.08728 11.3449 1.99399 9.25162 1.99399 6.66942C1.99399 4.08722 4.08728 1.99393 6.66948 1.99393C9.25168 1.99393 11.3449 4.08722 11.3449 6.66942C11.3449 9.25162 9.25168 11.3449 6.66948 11.3449Z" fill="white"/>
							</g>
							<defs>
								<clipPath id="clip0">
								<rect width="16" height="16" fill="white"/>
								</clipPath>
							</defs>
							</g>
						</svg>
					</div>


					<div class="header__contact--email">
						<svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
						<circle cx="21" cy="21" r="20.5" stroke="white"/>
						<g opacity="0.999">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M13.9184 16.0009C18.8112 15.9985 23.7041 16.0009 28.597 16.0081C28.7522 16.0474 28.895 16.1097 29.0255 16.195C29.0626 16.2238 29.0754 16.2597 29.0638 16.3028C28.9842 16.3824 28.9 16.4567 28.8112 16.5257C26.3339 18.5016 23.8594 20.481 21.3878 22.4637C21.3141 22.523 21.2376 22.5278 21.1582 22.4781C18.6224 20.4508 16.0867 18.4236 13.551 16.3963C13.5066 16.3618 13.4709 16.3211 13.4439 16.2741C13.4947 16.1875 13.5712 16.1276 13.6735 16.0944C13.7583 16.0663 13.84 16.0352 13.9184 16.0009Z" fill="white"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M13.0306 17.0649C13.0909 17.0668 13.1419 17.0884 13.1837 17.1296C14.9694 18.5769 16.7551 20.0243 18.5408 21.4717C18.5758 21.5014 18.6013 21.5374 18.6174 21.5795C18.5903 21.6265 18.5546 21.6673 18.5102 21.7017C16.7557 23.0862 15.0057 24.476 13.2602 25.8713C13.1985 25.9194 13.1322 25.9601 13.0612 25.9935C13.0264 25.9895 13.0085 25.9703 13.0077 25.936C12.9974 22.9981 12.9974 20.0602 13.0077 17.1224C13.0139 17.1022 13.0216 17.0831 13.0306 17.0649Z" fill="white"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M29.4082 17.0649C29.4338 17.0649 29.4592 17.0649 29.4847 17.0649C29.5051 20.0363 29.5051 23.0077 29.4847 25.9791C29.4537 25.9815 29.423 25.9791 29.3929 25.9719C27.5771 24.5396 25.7659 23.1018 23.9592 21.6586C23.9195 21.6253 23.9067 21.5845 23.9209 21.5364C25.7439 20.0371 27.573 18.5466 29.4082 17.0649Z" fill="white"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M19.1531 22.0971C19.2013 22.093 19.2472 22.1002 19.2908 22.1187C19.9241 22.6417 20.5618 23.1593 21.2041 23.6715C21.2646 23.6846 21.3207 23.675 21.3725 23.6427C21.9767 23.1409 22.5839 22.6425 23.1939 22.1474C23.2482 22.0963 23.3094 22.0867 23.3776 22.1187C25.2723 23.6254 27.1626 25.1374 29.0485 26.6549C29.0684 26.6817 29.0734 26.7105 29.0638 26.7412C28.989 26.8159 28.8997 26.8711 28.7959 26.9065C28.6882 26.933 28.581 26.9617 28.4745 26.9928C23.6633 27.0024 18.852 27.0024 14.0408 26.9928C13.8544 26.961 13.6809 26.8987 13.5204 26.8059C13.4189 26.7307 13.424 26.6588 13.5357 26.5902C15.4066 25.0891 17.279 23.5914 19.1531 22.0971Z" fill="white"/>
						</g>
						</svg>
					</div>

					<div class="header__contact--phone">
						<svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
						<circle cx="21" cy="21" r="20.5" stroke="white"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M16.3614 14.0312C16.6081 14.0954 16.732 14.1922 17.1737 14.6661C17.2984 14.7999 17.5383 15.0558 17.7069 15.2348C18.4378 16.0106 18.4256 15.9971 18.5127 16.1349C18.636 16.3301 18.6894 16.5244 18.6908 16.7832C18.693 17.1898 18.5951 17.392 18.1798 17.839C17.6561 18.4026 17.6546 18.4453 18.1379 19.068C18.4283 19.4422 18.9286 20.049 19.2028 20.3595C20.3428 21.651 21.2913 22.6221 22.3293 23.5603C22.6368 23.8383 22.7244 23.8885 22.8832 23.8783C23.0331 23.8686 23.0527 23.8542 23.4417 23.4654C23.9247 22.9827 24.0197 22.9299 24.4053 22.9299C24.7192 22.9299 24.9855 23.0535 25.2011 23.2991C25.2426 23.3463 25.3796 23.4924 26.005 24.1563C26.769 24.9674 26.7749 24.9741 26.8662 25.1587C27.0893 25.6092 27.0308 26.1115 26.7099 26.5007C26.542 26.7045 25.7701 27.5138 25.6496 27.6124C25.2963 27.9018 24.7155 28.0621 24.3266 27.9774C23.952 27.8959 23.7988 27.8176 23.2948 27.4503C21.0886 25.8426 19.0119 23.8988 17.2724 21.8133C16.0536 20.352 14.3813 17.9797 14.1379 17.3666C13.8726 16.6983 13.9978 15.8639 14.4469 15.3074C14.5505 15.179 15.3279 14.3503 15.4189 14.2712C15.6904 14.0354 16.0376 13.947 16.3614 14.0312Z" fill="white"/>
						</svg>
					</div>

					<div class="header__contact--hamburger">
						<!-- Original hamburger menu icon - add class "menu-icon" -->
						<svg xmlns="http://www.w3.org/2000/svg" width="22" height="12" viewBox="0 0 22 12" fill="none" class="menu-icon">
						<rect width="22" height="2" fill="#D9D9D9"/>
						<rect y="5" width="22" height="2" fill="#D9D9D9"/>
						<rect y="10" width="22" height="2" fill="#D9D9D9"/>
						</svg>
						
						<!-- Add the close icon -->
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none" class="close-icon">
						<path fill="white" d="M18 1.49206L16.8487 0L9 7.68254L1.15133 0L0 1.49206L7.66615 9L0 16.5079L1.15133 18L9 10.3175L16.8487 18L18 16.5079L10.3339 9L18 1.49206Z" fill="black"/>
						</svg>
					</div>

				</div>
				
			</div>
		</div><!-- end of nav wrap -->
	</header>

	<div class="mobile-nav-overlay">
	<div class="mobile-nav-overlay__content">
		<?php wp_nav_menu( array(
		'theme_location' => 'primary-menu',
		'menu_id' => 'mobile-nav',
		'sort_column' => 'menu_order',
		'container' => false
		) ); ?>
	</div>
</div>
	<main>
