<div class="box">
    <img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="">
    <div class="link_box">
        <h5>
           <?php get_the_title(); ?>
        </h5>
        <a href="<?= get_the_permalink(); ?>">
            Buy Now
        </a>
    </div>
</div>