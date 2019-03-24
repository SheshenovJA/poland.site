<?= $this->element('breadcrumb',
    ['crumbs' => ['dashboard' => 'Панель'],
        'active' => 'Seo та підказки']) ?>

    <section id="widget-grid" class="">

        <div class="row">


        </div>

            <!-- NEW COL START -->
            <article class="col-sm-12 col-md-12 col-lg-6 sortable-grid ui-sortable">

                <!-- Widget ID (each widget will need unique ID)-->
                <div class="jarviswidget jarviswidget-sortable" id="wid-id-21" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false" role="widget" style="position: relative; opacity: 1; left: 0px; top: 0px;">
                    <!-- widget options:
                    usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                    data-widget-colorbutton="false"
                    data-widget-editbutton="false"
                    data-widget-togglebutton="false"
                    data-widget-deletebutton="false"
                    data-widget-fullscreenbutton="false"
                    data-widget-custombutton="false"
                    data-widget-collapsed="true"
                    data-widget-sortable="false"

                    -->
                    <header role="heading">
                        <div class="jarviswidget-ctrls" role="menu">
                            <a href="javascript:void(0);" class="button-icon jarviswidget-toggle-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Collapse"><i class="fa fa-minus "></i></a> <a href="javascript:void(0);" class="button-icon jarviswidget-fullscreen-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Fullscreen"><i class="fa fa-expand "></i></a> <a href="javascript:void(0);" class="button-icon jarviswidget-delete-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Delete"><i class="fa fa-times"></i></a></div>
                        <span class="widget-icon">
                            <i class="fa fa-edit"></i>
                            </span>


                        <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span></header>

                    <!-- widget div-->
                    <div role="content">

                        <!-- widget edit box -->
                        <div class="jarviswidget-editbox">
                            <!-- This area used as dropdown edit box -->

                        </div>
                        <!-- end widget edit box -->

                        <!-- widget content -->
                        <div class="widget-body no-padding">

                            <form action="/admin/addSeo" method="post" class="smart-form">
                                <input type="hidden" name="_csrfToken" value="<?= $this->request->getParam('_csrfToken'); ?>">

                                <header>Seo title</header>

                                <fieldset>
                                    <section>

                                        <label  class="input">
                                            <input class="custom-scroll" type="text" name="page_seo_title"
                                                   value="<?= (!empty($seo['page_seo_title']) ? $seo['page_seo_title']  : 'No data'); ?>">
                                        </label>
                                    </section>
                                </fieldset>

                                <header>Seo Description</header>

                                <fieldset>
                                    <section>

                                        <label class="textarea">
                                            <textarea rows="6" name="page_seo_desc" class="custom-scroll"><?= (!empty($seo['page_seo_desc']) ? $seo['page_seo_desc'] : 'no data')?></textarea>
                                        </label>
                                        <div class="note">
                                            <strong>Увага:</strong> Right now Facebook only displays the first 300 characters
                                        </div>
                                    </section>
                                </fieldset>

                                <header>Ключові слова</header>

                                <fieldset>
                                    <section>
                                        <label class="textarea">
                                            <textarea rows="6" name="page_seo_keys" class="custom-scroll"><?= (!empty($seo['page_seo_keys']) ? $seo['page_seo_keys'] : 'no data')?></textarea>
                                        </label>
                                        <div class="note">
                                            <strong>Увага:</strong> Список ключових слів необхідно заповнити через кому!
                                        </div>
                                    </section>
                                </fieldset>



                                <footer>
                                    <button type="submit" class="btn btn-primary">
                                        Зберегти
                                    </button>

                                </footer>
                            </form>

                        </div>
                        <!-- end widget content -->

                    </div>
                    <!-- end widget div -->

                </div>
                <!-- end widget -->

            </article>
            <!-- END COL -->

            <!-- NEW COL START -->
            <article class="col-sm-12 col-md-12 col-lg-6 sortable-grid ui-sortable">

                <!-- Widget ID (each widget will need unique ID)-->
                <div class="jarviswidget jarviswidget-color-blueLight" id="wid-id-33"
                     data-widget-colorbutton="false"
                     data-widget-editbutton="false"
                     data-widget-togglebutton="false"
                     data-widget-deletebutton="false"
                     data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
                    <!-- widget options:
                    usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                    data-widget-colorbutton="false"
                    data-widget-editbutton="false"
                    data-widget-togglebutton="false"
                    data-widget-deletebutton="false"
                    data-widget-fullscreenbutton="false"
                    data-widget-custombutton="false"
                    data-widget-collapsed="true"
                    data-widget-sortable="false"

                    -->
                    <header role="heading">
                        <span class="widget-icon"> <i class="fa fa-list-alt"></i> </span>
                        <h2> Підказки </h2>


                        <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span></header>

                    <!-- widget div-->
                    <div role="content">

                        <!-- widget edit box -->
                        <div class="jarviswidget-editbox">
                            <!-- This area used as dropdown edit box -->

                        </div>
                        <!-- end widget edit box -->

                        <!-- widget content -->
                        <div class="widget-body no-padding">

                            <div class="panel-group smart-accordion-default" id="accordion-2">

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a
                                                    data-toggle="collapse"
                                                    data-parent="#accordion-2"
                                                    href="#collapseOne-1"
                                                    aria-expanded="true"
                                                    class="collapsed">
                                                <i class="fa fa-fw fa-plus-circle txt-color-green"></i>
                                                <i class="fa fa-fw fa-minus-circle txt-color-red"></i>
                                                SEO </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne-1"
                                         class="panel-collapse collapse in"
                                         aria-expanded="false"
                                         >
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                            Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                            squid single-origin coffee nulla assumenda shoreditch et.
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a
                                                    data-toggle="collapse"
                                                    data-parent="#accordion-2"
                                                    href="#collapseTwo-1"
                                                    class="collapsed"
                                                    aria-expanded="false">
                                                <i class="fa fa-fw fa-plus-circle txt-color-green"></i>
                                                <i class="fa fa-fw fa-minus-circle txt-color-red"></i>
                                                Файли </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo-1"
                                         class="panel-collapse collapse"
                                         aria-expanded="true"
                                         style="">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a
                                                    data-toggle="collapse"
                                                    data-parent="#accordion-2"
                                                    href="#collapseThree-1"
                                                    class="collapsed"
                                                    aria-expanded="false">
                                                <i class="fa fa-fw fa-plus-circle txt-color-green"></i>
                                                <i class="fa fa-fw fa-minus-circle txt-color-red"></i>
                                                Картинки
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree-1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end widget content -->

                    </div>
                    <!-- end widget div -->

                </div>
                <!-- end widget -->

            </article>
            <!-- END COL -->



    </section>
<?php $this->append('pageCss'); ?>
<!--    <link href="/admin/css/data-table.css" rel="stylesheet"/>-->
    <link href="/admin/js/sweetalert/dist/sweetalert.css" rel="stylesheet">
<?php $this->end(); ?>



<?php $this->append('pageScript')?>
    <script src="/admin/js/plugin/datatables/jquery.dataTables.js"></script>
    <script src="/admin/js/plugin/datatables/dataTables.bootstrap.js"></script>
    <script src="/admin/js/plugin/datatables/dataTables.colVis.js"></script>
    <script src="/admin/js/plugin/datatables/dataTables.tableTools.js"></script>
    <script src="/admin/js/sweetalert/dist/sweetalert.min.js"></script>


<?php $this->end()?>