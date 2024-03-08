<?php wp_body_open(); ?>

<header id="header" class="header">
    <nav class="navigation">
        <ul class="navigation__list">
            <li class="navigation__item">
                <a class="navigation__link" href="<?php echo esc_url(home_url()); ?>/#features">Features</a>
            </li>
            <li class="navigation__item">
                <a class="navigation__link" href="<?php echo esc_url(home_url()); ?>/#price">Price</a>
            </li>
            <li class="navigation__item">
                <a class="navigation__link" href="<?php echo esc_url(home_url()); ?>/#staff">Staff</a>
            </li>
            <li class="navigation__item">
                <a class="navigation__link" href="<?php echo esc_url(home_url()); ?>/#news">News</a>
            </li>
            <li class="navigation__item">
                <a class="navigation__link" href="<?php echo esc_url(home_url()); ?>/#access">Access</a>
            </li>
        </ul>
    </nav>

    <div class="logo">
        <a class="logo__text" href="<?php echo esc_url(home_url()); ?>">Kz-salon</a>
    </div>

    <a class="book" href='<?php echo esc_url(home_url()); ?>/booking/'>
        ご予約はこちら
    </a>
</header>