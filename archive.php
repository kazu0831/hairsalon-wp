<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/page.css">
</head>

<body <?php body_class(); ?>>
    <?php get_template_part('navigation'); ?>

    <div class="container">
        <main class="main">
            <section class='fixed'>
                <h2 class="heading">
                    News
                </h2>

                <div class="fixed__wrap">
                    <ul class="news__list">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <li class="news__item">
                                    <span class='news-date'>
                                        <?php the_time('Y-m-d'); ?>
                                    </span>

                                    <a class="news-title" href="<?php the_permalink(); ?>">
                                        <?php
                                        if (mb_strlen($post->post_title, 'UTF-8') > 18) {
                                            $title = mb_substr($post->post_title, 0, 18, 'UTF-8');
                                            echo $title . '...';
                                        } else {
                                            echo $post->post_title;
                                        }
                                        ?>
                                    </a>
                                </li>
                        <?php endwhile;
                        endif; ?>
                    </ul>

                    <div class="fixed__pagination">
                        <?php
                        the_posts_pagination(array(
                            'mid_size' => 1,
                            'prev_next' => false,
                            'type' => 'list',
                        ));
                        ?>
                    </div>
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
    <?php get_template_part('toTop'); ?>
    <?php get_footer(); ?>
</body>

</html>