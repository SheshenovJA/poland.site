<?= $this->element('breadcrumb',
    ['crumbs' => ['dashboard' => 'Панель'],
    'active' => 'Змінити пароль адміна']) ?>





    <!-- START ROW -->
<section id="widget-grid" id="wid-id-0" class="">

        <!-- NEW COL START -->
        <article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">

            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget jarviswidget-sortable" id="wid-id-1" data-widget-colorbutton="true" data-widget-editbutton="false" data-widget-custombutton="false" role="widget" style="position: relative; opacity: 1; left: 0px; top: 0px;">
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
                <?= $this->Flash->render() ?>
                <header role="heading" class="ui-sortable-handle">
                    <div class="jarviswidget-ctrls" role="menu">
                        <a href="javascript:void(0);" class="button-icon jarviswidget-toggle-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Згорнути" style=""><i class="fa fa-minus"></i></a>
                        <a href="javascript:void(0);" class="button-icon jarviswidget-fullscreen-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="На весь екран"><i class="fa fa-expand"></i></a>
                        <a href="javascript:void(0);" class="button-icon jarviswidget-delete-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Видалити" style=""><i class="fa fa-times"></i></a>
                    </div>
                    <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                    <h2>Керування акаунтом адміністратора</h2>

                    <span class="jarviswidget-loader" style="display: none;"><i class="fa fa-refresh fa-spin"></i></span>
                </header>

                <!-- widget div-->
                <div role="content">

                    <!-- widget edit box -->
                    <div class="jarviswidget-editbox">
                        <!-- This area used as dropdown edit box -->

                    </div>
                    <!-- end widget edit box -->

                    <!-- widget content -->
                    <div class="widget-body no-padding">

                        <form action="/admin/change_password" method="post" class="smart-form">
                            <input type="hidden" name="_csrfToken" value="<?= $this->request->getParam('_csrfToken'); ?>">
                            <header>
                                Змінити пароль для: <?=$admin_user->login?>
                            </header>

                            <fieldset>

                                <section>
                                    <label class="label">Старий пароль</label>
                                    <label class="input">
                                        <input type="password" name="old_pass">
                                    </label>
                                </section>
                                <section>
                                    <label class="label">Новий пароль</label>
                                    <label class="input">
                                        <input type="password" name="pass">
                                    </label>
                                </section>
                                <section>
                                    <label class="label">Новий пароль ще раз</label>
                                    <label class="input">
                                        <input type="password" name="conf_pass">
                                    </label>
                                </section>



                            </fieldset>

                            <fieldset>

                            <footer>
                                <button type="submit" class="btn btn-primary">
                                    Зберегти
                                </button>
                                <button type="button" class="btn btn-default" onclick="window.history.back();">
                                    Назад
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
        <!-- END COL -->
<?php $this->append('pageScript'); ?>
<?php $this->end()?>


