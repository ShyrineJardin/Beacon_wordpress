<?php get_header(); ?>
<section class="blog-page">
  <div class="blog-page__banner">
    <img src="<?php echo get_template_directory_uri();?>/assets/images/blog-banner.png" alt="">
  </div>

    <div class="blog-page__container">

        <nav class="blog-page__breadcrumb">
			<a href="<?php echo home_url(); ?>">Home</a> &raquo;

			<?php
			if (is_category()) {
				// Current category archive
				$category = get_queried_object();
				echo esc_html($category->name);
			} elseif (is_single()) {
				// Link to blog landing page 
				echo '<a href="' . get_permalink(get_option('page_for_posts')) . '">Blog</a> &raquo; ';

				// Get first category assigned to post
				$category = get_the_category();
				if (!empty($category)) {
					echo '<a href="' . esc_url(get_category_link($category[0]->term_id)) . '">' . esc_html($category[0]->name) . '</a> &raquo; ';
				}

					// Post title
					the_title();
				} elseif (is_tag()) {
					// Tag archive
					single_tag_title();
				} elseif (is_search()) {
					echo 'Search results for: "' . get_search_query() . '"';
				} elseif (is_page()) {
					// Hierarchical page breadcrumb
					global $post;
					$parents = get_post_ancestors($post);
					$parents = array_reverse($parents);
					foreach ($parents as $parent) {
						echo '<a href="' . get_permalink($parent) . '">' . get_the_title($parent) . '</a> &raquo; ';
					}
					echo get_the_title();
				} elseif (is_home()) {
					echo 'Blog';
				} else {
					// Fallback
					wp_title('');
				}
			?>
			</nav>


            <div class="blog-page__header">
                <div class="blog-page__header__text">
                       <div class="blog-page__header__text__title">
                            <h2>LATEST NEWS</h2>
                        </div>

                        <div class="blog-page__header__desc">
                            <p>Keep on top with latest and exclusive updates from our blog on the Los Angeles real estate world. Ascend Team posts about tips and trends for buyers, sellers, and investors every week. Whether it be about staging your property or a snapshot of the market, this is your one stop shop.</p>
                        </div>
                </div>

                <div class="blog-page__header__search">
                    <form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
                    <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search blog" required/>
                    <button type="submit" id="searchsubmit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" viewBox="0 0 16 16">
                        <path d="M5.9175 11.835C4.26363 11.835 2.86392 11.2622 1.71835 10.1166C0.572783 8.97108 0 7.57136 0 5.9175C0 4.26363 0.572783 2.86392 1.71835 1.71835C2.86392 0.572783 4.26363 0 5.9175 0C7.57136 0 8.97108 0.572783 10.1166 1.71835C11.2622 2.86392 11.835 4.26363 11.835 5.9175C11.835 6.58511 11.7288 7.21479 11.5164 7.80654C11.3039 8.39829 11.0156 8.92176 10.6515 9.37696L15.7496 14.4751C15.9165 14.642 16 14.8544 16 15.1124C16 15.3703 15.9165 15.5827 15.7496 15.7496C15.5827 15.9165 15.3703 16 15.1124 16C14.8544 16 14.642 15.9165 14.4751 15.7496L9.37696 10.6515C8.92176 11.0156 8.39829 11.3039 7.80654 11.5164C7.21479 11.7288 6.58511 11.835 5.9175 11.835ZM5.9175 10.0142C7.05548 10.0142 8.02276 9.61593 8.81934 8.81934C9.61593 8.02276 10.0142 7.05548 10.0142 5.9175C10.0142 4.77952 9.61593 3.81223 8.81934 3.01565C8.02276 2.21906 7.05548 1.82077 5.9175 1.82077C4.77952 1.82077 3.81223 2.21906 3.01565 3.01565C2.21906 3.81223 1.82077 4.77952 1.82077 5.9175C1.82077 7.05548 2.21906 8.02276 3.01565 8.81934C3.81223 9.61593 4.77952 10.0142 5.9175 10.0142Z" fill="white"/>
                        </svg>
                        <span>Search</span>
                    </button>
                    </form>
                </div>
            </div>

			<div class="blog-page__result">
				<h2>Search results for "<?php echo get_search_query();?>"</h2>
			</div>

            <div class="blog-page__cards">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>
                        <?php get_template_part("templates/partials/archive", "card"); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

    </div>
</section>

<?php get_template_part("templates/partials/contact","page") ?>


<?php get_footer(); ?>