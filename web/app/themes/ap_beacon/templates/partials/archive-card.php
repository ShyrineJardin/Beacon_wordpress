<div class="card">
    <div class="card__info">
        <div class="card__info__image">
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
            </div>
                <div class="card__info__description">
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                </div>
            </div>
        <div class="card__button">
            <a href="<?php the_permalink(); ?>">Read more</a>
        </div>
</div>

