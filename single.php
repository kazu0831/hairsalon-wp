<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/single.css">
</head>

<body>
    <?php get_template_part('navigation'); ?>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <div class="container">
                <main class="main">

                    <section id="news">
                        <h2 class="heading">News</h2>

                        <div class="news__wrap">
                            <div class="news__meta">
                                <h3 class="news__title">
                                    <?php the_title(); ?>
                                </h3>

                                <div class="news__link">
                                    <a class="news-date" href="#"><?php the_date(); ?></a>
                                    <a class="news-author" href="#">by <?php the_author(); ?></a>
                                </div>
                            </div>

                            <hr>

                            <div class="news__content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </section>

                    <section id="access">
                        <h2>Access</h2>
                        <div class="access__wrap">
                            <div class="access__map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3240.491713393053!2d139.689157375635!3d35.68951562258455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z5p2x5Lqs6YO95bqB!5e0!3m2!1sja!2sjp!4v1709525953272!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="access__detail">
                                <dl class="access__list">
                                    <dt>店舗名：</dt>
                                    <dd>Kz-salon</dd>
                                </dl>
                                <dl class="access__list">
                                    <dt>営業時間：</dt>
                                    <dd>9:00 am ～ 20:00 pm</dd>
                                </dl>
                                <dl class="access__list">
                                    <dt>住所：</dt>
                                    <dd>東京都○○区○○</dd>
                                </dl>
                                <dl class="access__list">
                                    <dt>電話番号：</dt>
                                    <dd>000-0000-0000</dd>
                                </dl>
                            </div>
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