<?php get_header(); ?>

<div class="banner-img">
	<img src="<?php echo get_template_directory_uri();?>/assets/images/blog-banner.png" alt="">
</div>

<!-- content -->
 <section class="blog">
	<nav class="blog__breadcrumb">
			<a href="<?php echo home_url(); ?>">Home</a> &raquo;

			<?php if (is_category() || is_single()) : ?>
				<a href="<?php echo get_category_link(get_queried_object_id()); ?>"><?php single_cat_title(); ?>Blogs</a> &raquo;
			<?php endif; ?>

			<?php if (is_single()) : ?>
				<span><?php the_title(); ?></span>
			<?php elseif (is_category()) : ?>
				<span><?php single_cat_title(); ?></span>
			<?php elseif (is_page()) : ?>
				<span><?php the_title(); ?></span>
			<?php elseif (is_archive()) : ?>
				<span><?php post_type_archive_title(); ?></span>
			<?php endif; ?>
  		</nav>
		
	<div class="blog-container">
		
		<div class="blog__content">
			<div class="blog__content__text">
				<h3><?php the_title();?></h3>
				
				 <?php
					$content = apply_filters('the_content', get_the_content());
					$paragraphs = preg_split('/<\/p>/', $content); // Split paragraphs
					$first_paragraph = array_shift($paragraphs);   // Get the first
					$remaining_content = implode('</p>', $paragraphs); // Remaining
				 ?>

					<p><?php echo $first_paragraph . '</p>'; ?></p>

					<?php if (has_post_thumbnail()) : ?>
					<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
					<?php endif; ?>

					<?php echo $remaining_content; ?>
			</div>

			<div class="blog__content__socials">
			<h5>Share</h5>
			<div class="blog__content__socials__icons">
				<div class="blog__socials__icons__app">
					<svg xmlns="http://www.w3.org/2000/svg" width="42" height="43" viewBox="0 0 42 43" fill="none">
					<ellipse cx="21.0001" cy="21.7617" rx="20.5714" ry="21" fill="black"/>
					<path d="M23 23.2617H25.5L26.5 19.2617H23V17.2617C23 16.2323 23 15.2617 25 15.2617H26.5V11.9018C26.1743 11.8586 24.943 11.7617 23.6429 11.7617C20.9284 11.7617 19 13.4186 19 16.4614V19.2617H16V23.2617H19V31.7617H23V23.2617Z" fill="white"/>
					</svg>
				</div>

				<div class="blog__socials__icons__app">
					<svg xmlns="http://www.w3.org/2000/svg" width="42" height="43" viewBox="0 0 42 43" fill="none">
					<ellipse cx="21.0001" cy="21.7617" rx="20.5714" ry="21" fill="black"/>
					<path d="M17.6191 16.3174C17.6191 17.1431 17.0776 17.8545 16.0952 17.8545C15.1688 17.8545 14.5713 17.1831 14.5713 16.3574C14.5713 15.5103 15.1506 14.7617 16.0952 14.7617C17.0398 14.7617 17.601 15.4688 17.6191 16.3174ZM14.5713 28.7614V18.6502H17.6191V28.7614H14.5713Z" fill="white"/>
					<path d="M19.0979 22.1049C19.0979 20.9035 19.0587 19.8992 19.0195 19.0321H21.7581L21.8939 20.3721H21.9512C22.3375 19.7407 23.2821 18.8164 24.8634 18.8164C26.7931 18.8164 28.2401 20.1349 28.2401 22.9706V28.759H25.1922V23.4234C25.1922 22.1835 24.7304 21.2378 23.6683 21.2378C22.8594 21.2378 22.4536 21.9063 22.2409 22.4578C22.1625 22.6549 22.1444 22.9306 22.1444 23.2063V28.759H19.0979V22.1049Z" fill="white"/>
					</svg>
				</div>

				<div class="blog__socials__icons__app">
					<svg xmlns="http://www.w3.org/2000/svg" width="42" height="43" viewBox="0 0 42 43" fill="none">
					<ellipse cx="21.0001" cy="21.7617" rx="20.5714" ry="21" fill="black"/>
					<path d="M13.0429 12.7617L19.8409 22.6898L13 30.7617H14.5396L20.5288 23.6946L25.3679 30.7617H30.6072L23.4268 20.2752L29.7942 12.7617H28.2546L22.7389 19.2704L18.2823 12.7617H13.0429ZM15.307 14.0004H17.714L28.3428 29.5228H25.9358L15.307 14.0004Z" fill="white"/>
					</svg>
				</div>

				<div class="blog__socials__icons__app">
					<svg xmlns="http://www.w3.org/2000/svg" width="42" height="43" viewBox="0 0 42 43" fill="none">
					<ellipse cx="21.0001" cy="21.7617" rx="20.5714" ry="21" fill="black"/>
					<g opacity="0.999">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M13.0018 15.7627C18.3395 15.7601 23.6772 15.7627 29.0149 15.7705C29.1842 15.8135 29.34 15.8814 29.4824 15.9744C29.5228 16.0059 29.5368 16.0451 29.5241 16.0921C29.4373 16.1789 29.3455 16.2599 29.2486 16.3352C26.5461 18.4908 23.8466 20.6501 21.1503 22.8131C21.07 22.8777 20.9865 22.8829 20.8998 22.8288C18.1336 20.6172 15.3673 18.4056 12.6011 16.194C12.5527 16.1564 12.5137 16.112 12.4842 16.0607C12.5397 15.9663 12.6231 15.901 12.7347 15.8647C12.8273 15.8341 12.9163 15.8001 13.0018 15.7627Z" fill="white"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M12.0334 16.9234C12.0992 16.9255 12.1548 16.949 12.2004 16.994C14.1484 18.5729 16.0965 20.1519 18.0445 21.7308C18.0827 21.7633 18.1105 21.8025 18.128 21.8485C18.0985 21.8997 18.0596 21.9442 18.0111 21.9818C16.0971 23.4921 14.1881 25.0083 12.2839 26.5304C12.2166 26.5829 12.1442 26.6273 12.0668 26.6637C12.0288 26.6593 12.0093 26.6384 12.0084 26.601C11.9972 23.396 11.9972 20.1911 12.0084 16.9861C12.0152 16.9642 12.0235 16.9433 12.0334 16.9234Z" fill="white"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M29.8999 16.9234C29.9277 16.9234 29.9555 16.9234 29.9833 16.9234C30.0056 20.165 30.0056 23.4065 29.9833 26.648C29.9494 26.6506 29.9161 26.648 29.8832 26.6402C27.9023 25.0776 25.9265 23.5091 23.9555 21.9347C23.9121 21.8984 23.8982 21.8539 23.9138 21.8014C25.9024 20.1658 27.8978 18.5398 29.8999 16.9234Z" fill="white"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M18.7124 22.4131C18.765 22.4086 18.8151 22.4164 18.8627 22.4367C19.5535 23.0072 20.2493 23.5718 20.9499 24.1306C21.0159 24.1449 21.0771 24.1345 21.1336 24.0993C21.7928 23.5518 22.4551 23.0081 23.1206 22.468C23.1799 22.4122 23.2466 22.4018 23.321 22.4367C25.388 24.0803 27.4501 25.7298 29.5075 27.3852C29.5292 27.4145 29.5347 27.4459 29.5241 27.4794C29.4425 27.5609 29.3451 27.621 29.2319 27.6597C29.1144 27.6886 28.9975 27.72 28.8813 27.7538C23.6327 27.7643 18.384 27.7643 13.1354 27.7538C12.932 27.7192 12.7428 27.6512 12.5677 27.5499C12.457 27.4679 12.4625 27.3895 12.5844 27.3147C14.6254 25.6771 16.668 24.0432 18.7124 22.4131Z" fill="white"/>
					</g>
					</svg>
				</div>

			</div>
		</div>
		</div>
		
		
	</div>

</section>

<?php get_template_part("templates/partials/contact","page") ?>

<?php get_footer(); ?>
