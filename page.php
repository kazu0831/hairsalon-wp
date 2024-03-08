<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/page.css">
</head>

<body <?php body_class(); ?>>
    <?php get_template_part('navigation'); ?>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <div class="container">
                <main class="main">
                    <section class='fixed'>
                        <h2 class="heading">
                            <?php the_title(); ?>
                        </h2>

                        <div class="fixed__wrap">
                            <?php the_content(); ?>
                        </div>
                    </section>

                    <section id="fixed__access">

                        <h2>Access</h2>

                        <div class="fixed__map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3240.491713393053!2d139.689157375635!3d35.68951562258455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z5p2x5Lqs6YO95bqB!5e0!3m2!1sja!2sjp!4v1709525953272!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </section>
                </main>
            </div>

        <?php endwhile; ?>
    <?php else : ?>
        <p class="news-noArticles">記事がありません</p>
    <?php endif; ?>
    <?php get_footer(); ?>
</body>

</html>