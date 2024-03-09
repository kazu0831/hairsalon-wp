<footer class="footer">
    <div class="footer__wrap">
        <ul class="footer__list">
            <li class="footer__item"><a href="<?php echo esc_url(home_url()); ?>/company/">会社概要</a></li>
            <li class="footer__item"><a href="<?php echo esc_url(home_url()); ?>/booking/">ご予約</a></li>
            <li class="footer__item"><a href="<?php echo esc_url(home_url()); ?>/all-news/">ブログ</a></li>
        </ul>

        <p>&copy; Kz-salon</p>
    </div>
    <?php get_template_part('toTop'); ?>
</footer>
<?php wp_footer(); ?>