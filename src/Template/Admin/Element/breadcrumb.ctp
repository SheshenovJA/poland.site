<?php if (!empty($crumbs) && $crumbs) {
    foreach ($crumbs as $href => $crumb) { ?>
        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-3 ">
            <h3 class="page-title txt-color-blueDark">
                <i class="fa fa-edit fa-fw "></i>
                <a <?= (!empty($href)) ? "href=\"$href\"" : '' ?>><?= $crumb ?></a>
                <span>&gt;
                    <?= $active ?>
			</span>
            </h3>
        </div>
    <?php }
} ?>