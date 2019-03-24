<section class="price">
    <div class="price__top">
        <div class="overlay"></div>

        <h1 class="price__top__title">
            Price list
        </h1>
    </div>
    <div class="price-list">
        <div class="container ">
            <div class="row align-center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
                    <p class="price-list__text">
                        We would like our clients to know what to expect, so we have prepared
                        an approximate price list of our services.
                    </p>
                    <?php if (!empty($prices_list)){?>
                    <div class="price__panel">
                        <?php foreach ($prices_list as $price){?>
                        <div class="panel">
                            <div class="panel__top js-panel-top">
                                <?= $price->name ?>
                            </div>
                            <div class="panel__bottom js-panel-bottom" style="display: none">
                                <?php if (!empty($price->prices)){?>
                                  <?php foreach ($price->prices as $list){?>
                                <div class="panel__bottom__group">
                                    <span class="panel__bottom__name">
                                         <?= $list->name ?>
                                    </span>
                                    <span class="panel__bottom__sq">
                                        <?= $list->qnt ?>
                                    </span>
                                    <span class="panel__bottom__price">
                                         <?= $list->price ?>
                                     </span>
                                </div>
                                    <?php }?>

                                <?php }?>


                            </div>
                        </div>
                        <?php }?>

                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>
