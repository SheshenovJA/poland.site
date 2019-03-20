<?= $this->element('breadcrumb',
    ['crumbs' => ['dashboard' => 'Dashboard'],
        'active' => 'Contacts options']) ?>

        
<section id="widget-grid" id="wid-id-0" class="">
    <article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-sortable" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false" role="widget" style="position: relative; opacity: 1; left: 0px; top: 0px;">
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
                <?= $this->Flash->render() ?>
                -->
            <header role="heading" class="ui-sortable-handle"><div class="jarviswidget-ctrls" role="menu">
                    <a href="javascript:void(0);" class="button-icon jarviswidget-toggle-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Collapse" style=""><i class="fa fa-minus"></i></a> <a href="javascript:void(0);" class="button-icon jarviswidget-fullscreen-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Fullscreen"><i class="fa fa-expand"></i></a> <a href="javascript:void(0);" class="button-icon jarviswidget-delete-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Delete" style=""><i class="fa fa-times"></i></a></div>
                <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                <h2>Керування контактами </h2>

                <span class="jarviswidget-loader" style="display: none;"><i class="fa fa-refresh fa-spin"></i></span></header>

            <!-- widget div-->
            <div role="content">

                <!-- widget edit box -->
                <div class="jarviswidget-editbox">
                    <!-- This area used as dropdown edit box -->

                </div>
                <!-- end widget edit box -->
                <!-- widget content -->
                <div class="widget-body no-padding">

                    <form action="/admin/contacts" method="post" class="smart-form">
                        <input type="hidden" name="_csrfToken" value="<?= $this->request->getParam('_csrfToken'); ?>">
                        <header>
                            Contacts options <strong><?= DOMAIN ?></strong>
                        </header>

                        <fieldset>
                      

                            <section>
                                <label class="label">Email: </label>
                                <label class="input">
                                    <input type="email" name="contact_email" value="<?= (!empty($config['contact_email']) ? $config['contact_email'] : '')?>">
                                </label>
                            </section>


                            <section>
                                <label class="label">Телефон: </label>
                                <label class="input">
                                    <input type=text name="contact_phone" value="<?= (!empty($config['contact_phone']) ? $config['contact_phone'] : '')?>">
                                </label>
                            </section>

                            <section>
                                <label class="label">  Телефон 2: </label>
                                <label class="input">
                                    <input type="text" name="contact_phone_second" value="<?= (!empty($config['contact_phone_second']) ? $config['contact_phone_second'] : '')?>">
                                </label>
                            </section>


                        </fieldset>
                        <header>
                            Social networks
                        </header>

                        <fieldset>
                            <section>
                                <label class="label">  Facebook: </label>
                                <label class="input">
                                    <input type="text" name="contact_social_fb" value="<?= (!empty($config['contact_social_fb']) ? $config['contact_social_fb'] : '')?>">
                                </label>
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

</section>