<?php if(!empty($content_db)){?>
    <?php foreach ($content_db as $k => $item){?>
<a href="" class="photo-album__item post-id" data-count="<?= $item->id; ?>">
                <div class="photo-album__item__foto">
                    <div class="photo-album__item__foto__img">
                        <div class="photo-album__img" style="background: url('app/img/tour1.png')no-repeat center; background-size: cover;"></div>
                    </div>
                    <div class="photo-album__item__foto__img small">
                        <div class="photo-album__img small" style="background: url('app/img/tour3.png') no-repeat center; background-size: cover;"></div>
                        <div class="photo-album__img small" style="background: url('app/img/tour3.png') no-repeat center; background-size: cover;"></div>
                    </div>
                </div>
                <h3 class="photo-album__item__name">
                    Земля Полтавська. Гостинець ІІ:
                    <span>Грудень, 2018    118 фотографій</span>
                </h3>
</a>
    <?php }?>
<?php }?>