<div class="footer">
    <div class="container">
        <div class="footer__main">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 col-xl-3">
                    <a href="" class="footer__logo">
                        <img src="/app/img/logo2.png" alt="" class="footer__logo__img">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
                    <ul class="footer__list  footer__list__nav">
                        <li class="footer__item">
                            НАВІГАЦІЯ
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Головна</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Хто ми є</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Гостинці</a>
                        </li>
<!--                        <li class="footer__item">-->
<!--                            <a href="" class="footer__link">Відгуки</a>-->
<!--                        </li>-->
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
                    <ul class="footer__list">
                        <li class="footer__item">
                            КОНТАКТИ
                        </li>
                        <li class="footer__item">
                            <a href="mailto: <?= (!empty($config['contact_email']) ? $config['contact_email'] : '' ); ?>" class="footer__link cont"><?= (!empty($config['contact_email']) ? $config['contact_email'] : '' ); ?> </a>
                        </li>
                        <li class="footer__item">
                            <a href="tel: <?= (!empty($config['contact_phone']) ? $config['contact_phone'] : '' ); ?>" class="footer__link cont"><?= (!empty($config['contact_phone']) ? $config['contact_phone'] : '' ); ?></a>
                        </li>
                        <li class="footer__item">
                            <a href="tel: <?= (!empty($config['contact_phone_second']) ? $config['contact_phone_second'] : '' ); ?>" class="footer__link cont"><?= (!empty($config['contact_phone_second']) ? $config['contact_phone_second'] : '' ); ?></a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3 col-xl-3">
                    <ul class="footer__list">
                        <li class="footer__item">
                            МИ В СОЦІАЛЬНИХ МЕРЕЖАХ
                        </li>
                        <li class="footer__item soc">
                            <?php if (!empty($config['contact_social_fb'])){?>
                            <a href="<?= $config['contact_social_fb']; ?>" class="footer__link">
                                <svg viewBox="0 0 24 24">
                                    <path d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z"></path>
                                </svg>
                            </a>
                            <?php }?>

                            <?php if (!empty($config['contact_social_inst'])){?>
                            <a href="" class="footer__link">
                                <svg viewBox="0 0 24 24">
                                    <path d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z"></path>
                                </svg>
                            </a>
                            <?php }?>
                            <?php if (!empty($config['contact_social_li'])){?>
                                <a href="" class="footer__link">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M10,15L15.19,12L10,9V15M21.56,7.17C21.69,7.64 21.78,8.27 21.84,9.07C21.91,9.87 21.94,10.56 21.94,11.16L22,12C22,14.19 21.84,15.8 21.56,16.83C21.31,17.73 20.73,18.31 19.83,18.56C19.36,18.69 18.5,18.78 17.18,18.84C15.88,18.91 14.69,18.94 13.59,18.94L12,19C7.81,19 5.2,18.84 4.17,18.56C3.27,18.31 2.69,17.73 2.44,16.83C2.31,16.36 2.22,15.73 2.16,14.93C2.09,14.13 2.06,13.44 2.06,12.84L2,12C2,9.81 2.16,8.2 2.44,7.17C2.69,6.27 3.27,5.69 4.17,5.44C4.64,5.31 5.5,5.22 6.82,5.16C8.12,5.09 9.31,5.06 10.41,5.06L12,5C16.19,5 18.8,5.16 19.83,5.44C20.73,5.69 21.31,6.27 21.56,7.17Z"></path>
                                    </svg>
                                </a>
                            <?php }?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copy">Powered by <a href="https://web-x.space/">WebX</a></div>
</div>