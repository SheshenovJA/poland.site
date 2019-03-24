<?= $this->element('breadcrumb',
['crumbs' => ['../dashboard' => 'Головна'],
'active' => 'Прайси']) ?>
<div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Редагувати</h4>
            </div>
            <div class="modal-body">
                <form action="/admin/prices/addPrice" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" class="catid" id="catid">
                    <div class="form-group">

                        <label class="control-label">Категорія</label>
                        <label class="control-label">
                            <select id="selcatval" name="category_id">
                                <?php if(!empty($categories)){ ?>
                                    <?php foreach ($categories as $cat){ ?>
                                        <option value="<?= $cat->id ?>">
                                            <?= $cat->name ?>
                                        </option>
                                    <?php } ?>
                                <?php }else{ ?>
                                <option disabled value="">
                                    no items
                                </option>

                                <?php } ?>

                            </select> <i></i> </label>

                    </div>
                    <div class="form-group">
                        <label class="control-label">Назва</label>
                        <input type="text" name="name" id="ukrname" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Од виміру</label>
                        <input type="text" name="qnt" id="qnt-f" class="form-control" value="">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Ціна</label>
                        <input type="text" name="price" id="price-f" class="form-control" value="">
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-sm btn-success">Зберегти</button>
                        <button type="button" class="btn btn-sm btn-white" data-dismiss="modal">Скасувати</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<section id="widget-grid" class="">

    <div class="row">


    </div>

    <!-- NEW COL START -->
    <article class="col-sm-12 col-md-12 col-lg-6 sortable-grid ui-sortable">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-sortable" id="wid-id-22" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false" role="widget" style="position: relative; opacity: 1; left: 0px; top: 0px;">
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
                            <i class="fa fa-plus"></i>
                            </span>

                <h2>Додати прайс</h2>
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

                    <form action="/admin/prices/addPrice" method="post" class="smart-form"  >


                        <fieldset>

                            <section>
                                <label class="label">Категорія: </label>
                                <label class="input">
                                    <select name="category_id" required id="cat_id" class="form-control">
                                        <?php if(!empty($categories)){ ?>
                                            <?php foreach ($categories as $cat){ ?>
                                        <option value="<?= $cat->id ?>">
                                            <?= $cat->name ?>
                                        </option>
                                        <?php } ?>
                                        <?php }else{ ?>
                                        <option disabled value="">
                                            no items
                                        </option>

                                        <?php } ?>

                                    </select>
                                </label>
                            </section>

                            <section>
                                <label class="label">Назва: </label>
                                <label class="input">
                                    <input type="text" name="name" required>
                                </label>
                            </section>

                            <section>
                                <label class="label">Одиниці виміру: </label>
                                <label class="input">
                                    <input type="text" name="qnt" required>
                                </label>
                            </section>
                            <section>
                                <label class="label">Ціна: </label>
                                <label class="input">
                                    <input type="text" name="price" required>
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
                                <h4 class="panel-title"><a
                                        data-toggle="collapse"
                                        data-parent="#accordion-2"
                                        href="#collapseTwo-1"
                                        class="collapsed"
                                        aria-expanded="false">
                                    <i class="fa fa-fw fa-plus-circle txt-color-green"></i>
                                    <i class="fa fa-fw fa-minus-circle txt-color-red"></i>
                                    Hазва </a>
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
                    </div>

                </div>
                <!-- end widget content -->

            </div>
            <!-- end widget div -->

        </div>
        <!-- end widget -->

    </article>
    <!-- END COL -->


    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">

        <!-- Widget ID (each widget will need unique ID)-->
        <div class="jarviswidget jarviswidget-sortable" id="wid-id-3" data-widget-editbutton="false" role="widget" style="position: relative; opacity: 1; left: 0px; top: 0px; display: block;" data-widget-attstyle="">
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
            <header
                    role="heading"
                    class="ui-sortable-handle">
                <div class="jarviswidget-ctrls" role="menu">
                    <a href="javascript:void(0);" class="button-icon jarviswidget-toggle-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Collapse"><i class="fa fa-minus "></i></a>
                    <a href="javascript:void(0);" class="button-icon jarviswidget-fullscreen-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Fullscreen"><i class="fa fa-expand "></i></a>
                    <a href="javascript:void(0);" class="button-icon jarviswidget-delete-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Delete"><i class="fa fa-times"></i></a>
                </div>
                <div class="widget-toolbar" role="menu">
                    <a data-toggle="dropdown"
                       class="dropdown-toggle color-box selector"
                       href="javascript:void(0);" aria-expanded="false"></a>
                    <ul class="dropdown-menu arrow-box-up-right color-select pull-right">
                        <li><span class="bg-color-green" data-widget-setstyle="jarviswidget-color-green"
                                  rel="tooltip" data-placement="left"
                                  data-original-title="Green Grass"></span></li>
                        <li><span class="bg-color-greenDark" data-widget-setstyle="jarviswidget-color-greenDark"
                                  rel="tooltip" data-placement="top" data-original-title="Dark Green"></span></li><li>
                                <span class="bg-color-greenLight" data-widget-setstyle="jarviswidget-color-greenLight"
                                      rel="tooltip" data-placement="top" data-original-title="Light Green"></span></li><li>
                        <span class="bg-color-purple" data-widget-setstyle="jarviswidget-color-purple" rel="tooltip" data-placement="top" data-original-title="Purple"></span></li><li><span class="bg-color-magenta" data-widget-setstyle="jarviswidget-color-magenta" rel="tooltip" data-placement="top" data-original-title="Magenta"></span></li><li><span class="bg-color-pink" data-widget-setstyle="jarviswidget-color-pink" rel="tooltip" data-placement="right" data-original-title="Pink"></span></li><li><span class="bg-color-pinkDark" data-widget-setstyle="jarviswidget-color-pinkDark" rel="tooltip" data-placement="left" data-original-title="Fade Pink"></span></li><li><span class="bg-color-blueLight" data-widget-setstyle="jarviswidget-color-blueLight" rel="tooltip" data-placement="top" data-original-title="Light Blue"></span></li><li><span class="bg-color-teal" data-widget-setstyle="jarviswidget-color-teal" rel="tooltip" data-placement="top" data-original-title="Teal"></span></li><li><span class="bg-color-blue" data-widget-setstyle="jarviswidget-color-blue" rel="tooltip" data-placement="top" data-original-title="Ocean Blue"></span></li><li><span class="bg-color-blueDark" data-widget-setstyle="jarviswidget-color-blueDark" rel="tooltip" data-placement="top" data-original-title="Night Sky"></span></li><li><span class="bg-color-darken" data-widget-setstyle="jarviswidget-color-darken" rel="tooltip" data-placement="right" data-original-title="Night"></span></li><li><span class="bg-color-yellow" data-widget-setstyle="jarviswidget-color-yellow" rel="tooltip" data-placement="left" data-original-title="Day Light"></span></li><li><span class="bg-color-orange" data-widget-setstyle="jarviswidget-color-orange" rel="tooltip" data-placement="bottom" data-original-title="Orange"></span></li><li><span class="bg-color-orangeDark" data-widget-setstyle="jarviswidget-color-orangeDark" rel="tooltip" data-placement="bottom" data-original-title="Dark Orange"></span></li><li><span class="bg-color-red" data-widget-setstyle="jarviswidget-color-red" rel="tooltip" data-placement="bottom" data-original-title="Red Rose"></span></li><li><span class="bg-color-redLight" data-widget-setstyle="jarviswidget-color-redLight" rel="tooltip" data-placement="bottom" data-original-title="Light Red"></span></li><li><span class="bg-color-white" data-widget-setstyle="jarviswidget-color-white" rel="tooltip" data-placement="right" data-original-title="Purity"></span></li><li><a href="javascript:void(0);" class="jarviswidget-remove-colors" data-widget-setstyle="" rel="tooltip" data-placement="bottom" data-original-title="Reset widget color to default">Remove</a></li></ul>
                </div>
                <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                <h2>Таблиця категорій</h2>

                <span class="jarviswidget-loader" style="display: none;"><i class="fa fa-refresh fa-spin"></i></span></header>

            <!-- widget div-->
            <div role="content">

                <!-- widget edit box -->
                <div class="jarviswidget-editbox">
                    <!-- This area used as dropdown edit box -->

                </div>
                <!-- end widget edit box -->

                <!-- widget content -->
                <div class="widget-body">
                    <div id="dt_basic_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                        <table class="table table-bordered" id="fur_table">
                            <thead>
                            <tr>
                                <th>N</th>
                                <th>Категорія</th>
                                <th>Назва</th>
                                <th>Одиниці вим</th>
                                <th>Ціна</th>
                                <th class="no-sort">Дії</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php if (!empty($prices)) {
                                    foreach ($prices as $key => $price) { ?>
                            <tr data-id="<?= $price->id ?>">
                                <td>
                                    <?= $key + 1 ?>
                                </td>
                                <td id="js-cat-name" data-value-cat="<?= $price->category->id ?>">
                                    <?= $price->category->name ?>
                                </td>
                                <td id="js-name">
                                    <?= $price->name ?>
                                </td>
                                <td id="js-qnt">
                                    <?= $price->qnt ?>
                                </td>
                                <td id="js-price">
                                    <?= $price->price ?>
                                </td>

                                <td class="with-btn-group">
                                    <div class="btn-group m-r-5 m-b-5">
                                        <a href="javascript:;" data-toggle="dropdown"
                                           class="btn btn-default dropdown-toggle width-30 no-caret"
                                           aria-expanded="false">Дії <span class="caret"></span></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a
                                                    data-name="<?= $price->name ?>"

                                                    href="#modal-dialog" data-toggle="modal"
                                                    data-target="#editModal"
                                                    data-id="<?= $price->id ?>"
                                            >Редагувати</a>
                                            </li>
                                            <li><a
                                                    data-id="<?= $price->id ?>"
                                                    data-title="Ви дійсно хочете видалити?"
                                                    data-text="У Вас не буде можливості його відновити"
                                                    class="delete"
                                                    href="/admin/prices/delete/<?= $price->id ?>">Видалити</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>

                            </tr>
                            <?php }
                                } else { ?>
                            <td colspan="6" style="text-align: center">Не знайдено жодної категорії</td>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end widget content -->

            </div>
            <!-- end widget div -->

        </div>


    </article>
</section>


<?php $this->append('pageCss'); ?>
<link href="/admin/css/data-table.css" rel="stylesheet"/>
<link href="/admin/js/sweetalert/dist/sweetalert.css" rel="stylesheet">
<link rel="stylesheet" href="/admin/css/rowReorder.dataTables.min.css">
<style>
    .btn-file {
        position: relative;
        overflow: hidden;
    }

    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }
</style>
<?php $this->end(); ?>



<?php $this->append('pageScript')?>
<script src="/admin/js/plugin/datatables/jquery.dataTables.js"></script>
<script src="/admin/js/plugin/datatables/dataTables.bootstrap.js"></script>
<script src="/admin/js/plugin/datatables/dataTables.colVis.js"></script>
<script src="/admin/js/plugin/datatables/dataTables.tableTools.js"></script>
<script src="/admin/js/plugin/datatables/dataTables.rowReorder.min.js"></script>
<script src="/admin/js/sweetalert/dist/sweetalert.min.js"></script>

<script>
    $(document).ready(function () {
        $('#editModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var tr = button.closest('tr');

            var name = tr.find('#js-name').text();
            var catname = tr.find('#js-cat-name').data("value-cat");
            var qnt = tr.find('#js-qnt').text();
            var price = tr.find('#js-price').text();
            console.log(catname);

            var catid = tr.data('id');

            var modal = $('#editModal');
            var parent_id = button.data('parent_id');
            $('#modal_parent_id_red').val(parent_id);

            modal.find('#catid').val(catid);
            modal.find('#ukrname').val(name.trim());
            modal.find('#selcatval').children('[value='+catname + ']').attr('selected', true);

            modal.find('#qnt-f').val(qnt.trim());
            modal.find('#price-f').val(price.trim());

        });


        $('.delete').click(function (event) {
            event.preventDefault();
            var id = $(this);
            var url = id.attr('href');
            var dataId = id.data('id');


            swal({
                    title: id.data('title'),
                    text: id.data('text'),
                    type: "warning",
                    showCancelButton: true,
                    cancelButtonText: "Ні",
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Так",
                    closeOnConfirm: true
                },
                function (isConfirm) {
                    if (isConfirm) {
                        swal("Видалено!", "Категорія з товарами була видалена", "success");
                        window.location.href = url;
                    }
                });


        });
        var table_fur = $('#fur_table').DataTable({
            "order": [[0, "asc"]],
            columnDefs: [
                {
                    visible: true,
                    orderable: false,
                    targets: [1, 2, 3]
                }
            ],
            rowReorder: true,
            "language": {
                "url": '/admin/js/datatable/i18n/Ukrainian.json'
            },
        });
        table_fur.on('row-reorder', function (e, diff, edit) {
            var data = {};
            for (var i = 0, ien = diff.length; i < ien; i++) {
                data[diff[i].node.dataset.id] = diff[i].newData;
            }
            $.ajax({
                type: "POST",
                url: '/admin/categories/sortPosts',
                data: data,
                success: function(){
                    new PNotify({
                        title: 'Сортування',
                        text: 'Порядок змінено',
                        type: 'success'
                    });
                }
            });
        });
        var table_fac = $('#facades_table').DataTable({
            "order": [[0, "asc"]],
            columnDefs: [
                {visible: true, orderable: false, targets: [1, 2, 3, 4, 5, 6]}
            ],
            rowReorder: true,
            "language": {
                "url": '/admin/js/datatable/i18n/Ukrainian.json'
            },

        });
        table_fac.on('row-reorder', function (e, diff, edit) {
            var data = {};
            for (var i = 0, ien = diff.length; i < ien; i++) {
                data[diff[i].node.dataset.id] = diff[i].newData;
            }
            console.log(data);
            $.ajax({
                type: "POST",
                url: '/admin/sortPosts',
                data: data,
                success: function(){
                    new PNotify({
                        title: 'Сортування',
                        text: 'Порядок змінено',
                        type: 'success'
                    });
                }
            });
        });
    });

</script>
<?php $this->end()?>