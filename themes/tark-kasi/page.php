<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

<div class="page-banner">
    <?php if (has_post_thumbnail()) : ?>
        <div class="page-banner-image"><?php the_post_thumbnail('full'); ?></div>
    <?php endif; ?>
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <p class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Avaleht</a> &rsaquo; <?php the_title(); ?></p>
    </div>
</div>

<div class="content-area">
    <div class="container">
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>
