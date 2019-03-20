
<aside id="left-panel">


    <!-- User info -->
    <!-- end user info -->

    <!-- NAVIGATION : This navigation is also responsive

    To make this navigation dynamic please make sure to link the node
    (the reference to the nav > ul) after page load. Or the navigation
    will not initialize.
    -->
    <nav>
        <!--
        NOTE: Notice the gaps after each icon usage <i></i>..
        Please note that these links work a bit different than
        traditional href="" links. See documentation for details.
        -->

        <ul id="nav">
            <li>
                <a href="#" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Панель керування</span><b class="collapse-sign"><em class="fa fa-minus-square-o"></em></b></a>
                <ul style="display: block;">
                    <li class="">
                        <a href="/admin/dashboard" title="Дошка/SEO">
                            <i class="fa fa-dot-circle-o"></i>
                            <span class="menu-item-parent">Дошка/SEO</span></a>
                    </li>

                    <li class="">
                        <a href="/admin/features/orders" title="Замовлення з форми">

                            <i class="fa fa-dot-circle-o"></i>
                            <?php if(!empty($form_count_orders)){?>
                                <span class="badge bg-color-redLight pull-right inbox-badge"><?=$form_count_orders?></span>
                            <?php }?>
                        Замовлення</a>

                    </li>


                    <li class="">
                        <a href="/admin/features/subscriptions" title="Email Підписки">
                            <i class="fa fa-dot-circle-o"></i>
                            <span class="menu-item-parent">Email Підписки</span></a>
                    </li>

                    <li class="">
                        <a href="/admin/features/contactscalls" title="Дзвінки">

                            <i class="fa fa-dot-circle-o"></i>
                            <?php if(!empty($contacts_count)){?>
                                <span class="badge bg-color-redLight pull-right inbox-badge"><?=$contacts_count?></span>
                            <?php }?>
                            Дзвінки</a>

                    </li>




                </ul>
            </li>

            <li>
                <a href="#" title="Panel"><i class="fa fa-lg fa-fw fa-map"></i>
                    <span class="menu-item-parent">Керування Турами</span>
                    <b class="collapse-sign">
                        <em class="fa fa-plus-square-o"></em>
                    </b>
                </a>
                <ul style="display: block;" >
                    <li>
                        <a href="/admin/tours/index" title="Усі товари">
                            <i class="fa fa-dot-circle-o"></i>
                            <span class="menu-item-parent">Усі Тури</span>
                        </a>
                    </li>

                    <li>
                        <a href="/admin/tours/change" title="Додати">
                            <i class="fa fa-dot-circle-o"></i>
                            <span class="menu-item-parent">Додати</span>

                        </a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="#" title="Panel"><i class="fa fa-lg fa-fw fa-product-hunt"></i>
                    <span class="menu-item-parent">Сторінки</span>
                    <b class="collapse-sign">
                        <em class="fa fa-plus-square-o"></em>
                    </b>
                </a>
                <ul  style="display: block;">
<!--                    <li class="">-->
<!--                        <a href="/admin/pages/about" title="Про нас">-->
<!--                            <i class="fa fa-dot-circle-o"></i>-->
<!--                            <span class="menu-item-parent">Про нас</span>-->
<!--                        </a>-->
<!--                    </li>-->

                    <li class="">
                        <a href="/admin/pages/feedbacks" title="Відгуки головної">

                            <i class="fa fa-dot-circle-o"></i>
                            <span class="menu-item-parent">Відгуки головної</span></a>


                    </li>




                </ul>
            </li>
            <li>
                <a href="#" title="Panel"><i class="fa fa-lg fa-fw fa-camera"></i>
                    <span class="menu-item-parent">Фотозвіт</span>
                    <b class="collapse-sign">
                        <em class="fa fa-plus-square-o"></em>
                    </b>
                </a>
                <ul  style="display: block;">
                    <li>
                        <a href="/admin/albums/change" title="Додати">
                            <i class="fa fa-dot-circle-o"></i>
                            <span class="menu-item-parent">Додати</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/albums/index" title="Список">
                            <i class="fa fa-dot-circle-o"></i>
                            <span class="menu-item-parent">Список альбомів</span>

                        </a>
                    </li>

                </ul>
            </li>


        </ul>

    </nav>

    <span class="minifyme" data-action="minifyMenu"> <i class="fa fa-arrow-circle-left hit"></i> </span>

</aside>
