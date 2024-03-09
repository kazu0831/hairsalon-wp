<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
    <?php get_template_part('navigation'); ?>

    <div class="container">
        <main class="main">

            <div class="mainvisual">
                <img class="mainvisual__img" src="<?php echo get_template_directory_uri(); ?>/img/woman1.jpg" alt="mainvisual">
            </div>


            <section id="features" class='start'>
                <h2 class="heading">Features</h2>

                <div class="features__list">
                    <div class="features__item">
                        <div class="features__item-img js-fade">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/features1.jpg" alt="">
                        </div>
                        <div class="features__item-text">
                            <h3>安心できる空間</h3>

                            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </div>

                    <div class="features__item features__item-reverse">
                        <div class="features__item-img js-fade">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/features2.jpg" alt="">
                        </div>
                        <div class="features__item-text">
                            <h3>絶対的な技術</h3>

                            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </div>

                    <div class="features__item">
                        <div class="features__item-img js-fade">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/features3.jpg" alt="">
                        </div>
                        <div class="features__item-text">
                            <h3>信頼の実績</h3>

                            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="price">
                <h2>Price</h2>

                <div class="price__field js-fade">
                    <div class="price__field-1">
                        <ul class="price__list">
                            <li class="price__item menu">CUT</li>
                            <li class="price__item fee">0,000 yen</li>
                        </ul>
                        <ul class="price__list">
                            <li class="price__item menu">CUT</li>
                            <li class="price__item fee">0,000 yen</li>
                        </ul>
                        <ul class="price__list">
                            <li class="price__item menu">COLOR</li>
                            <li class="price__item fee">0,000 yen</li>
                        </ul>
                        <ul class="price__list">
                            <li class="price__item menu">PERM</li>
                            <li class="price__item fee">0,000 yen</li>
                        </ul>
                        <ul class="price__list">
                            <li class="price__item menu">STRAIGHT</li>
                            <li class="price__item fee">0,000 yen</li>
                        </ul>
                    </div>

                    <div class="price__field-2">
                        <ul class="price__list">
                            <li class="price__item menu">TREATMENT</li>
                            <li class="price__item fee">0,000 yen</li>
                        </ul>

                        <ul class="price__list">
                            <li class="price__item menu">SPA</li>
                            <li class="price__item fee">0,000 yen</li>
                        </ul>

                        <ul class="price__list">
                            <li class="price__item menu">OTHER</li>
                            <li class="price__item fee">0,000 yen</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section id="staff">
                <h2>Staff</h2>

                <div class="staff__wrap js-fade">
                    <?php $args = array(
                        'post_type' => 'employee',
                        'order' => 'ASC',
                        'orderby' => 'modified'
                    );
                    $get_employee = new WP_Query($args);
                    ?>

                    <?php while ($get_employee->have_posts()) : $get_employee->the_post(); ?>
                        <div class="staff__item">
                            <a class="staff__link" href="<?php the_permalink(); ?>">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="staff_profile" class="staff__img">
                            </a>

                            <div class="staff__item-text">
                                <span class="staff__name">
                                    <?php the_title(); ?>
                                </span>
                                <span class="staff__career">
                                    <?php $career = get_post_meta(get_the_ID(), '歴', true); ?>
                                    <span>歴：<?php echo $career; ?></span>
                                </span>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </section>

            <section id="news">
                <h2>News</h2>

                <div class="news__wrap js-fade">
                    <?php if (have_posts()) : ?>
                        <ul class="news__list">
                            <?php while (have_posts()) : the_post(); ?>
                                <li class="news__item">
                                    <span class="news-date">
                                        <?php the_time('Y-m-d'); ?>
                                    </span>
                                    <a class="news-title" href="<?php the_permalink(); ?>">
                                        <?php
                                        if (mb_strlen($post->post_title, 'UTF-8') > 20) {
                                            $title = mb_substr($post->post_title, 0, 20, 'UTF-8');
                                            echo $title . '...';
                                        } else {
                                            echo $post->post_title;
                                        }
                                        ?>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php else : ?>
                        <p class="news-noArticle">記事がありません</p>
                    <?php endif; ?>
                </div>
            </section>

            <section id="access" class='end'>
                <h2>Access</h2>

                <div class="access__wrap js-fade">
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

    <?php get_template_part('booking'); ?>
    <?php get_footer(); ?>
</body>

</html>