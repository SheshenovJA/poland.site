<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Smart admin</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link rel="stylesheet" type="text/css" media="screen" href="/admin/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/admin/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/admin/css/smartadmin-production-plugins.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/admin/css/smartadmin-production.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/admin/css/smartadmin-skins.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/admin/css/smartadmin-rtl.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/admin/css/demo.min.css">
    <link rel="stylesheet" type="text/css" href="/admin/css/pnotify.custom.min.css">
    <link href="/admin/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet"/>
    <style>
        /*.row {*/
            /*margin-left: 0px;*/
            /*margin-right: 0px;*/
        /*}*/
        .active li{

            color: #2196F3; !important;

        }
        body.smart-style-6 #logo-group > span#logo:before {
            content: "РіднаUA" !important;;
            font-size: 18px;
            color: #fff;
            font-weight: 300;
            margin-top: 1px;
            display: block;
        }
    </style>
    <?= $this->fetch('pageCss'); ?>
</head>
<body class="smart-style-6">
<?= $this->element('header') ?>

<?= $this->element('sidebar'); ?>

<div id="main" role="main">
    <?= $this->element('breadcrumb'); ?>

    <?= $this->fetch('content'); ?>


</div>
<?= $this->element('footer'); ?>
<?= $this->Flash->render() ?>
</body>
<script src="/admin/assets/plugins/jquery/jquery-1.9.1.min.js"></script>
<!--<script-->
<!--        src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"-->
<!--        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="-->
<!--        crossorigin="anonymous"></script>-->

<script src="/admin/js/plugin/pace/pace.js"></script>
<script src="/admin/js/bootstrap/bootstrap.js"></script>
<script src="/admin/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
<script src="/admin/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
<script src="/admin/js/smartwidgets/jarvis.widget.js"></script>
<!-- IMPORTANT: APP CONFIG -->

<!--<script src="/admin/js/demo.min.js"></script>-->
<!-- MAIN APP JS FILE -->
<script src="/admin/js/app.config.js"></script>
<script src="/admin/js/app.js" > </script>



<!-- JQUERY MASKED INPUT -->
<script src="/admin/js/plugin/masked-input/jquery.maskedinput.js"></script>
<script src="/admin/js/notification/SmartNotification.js"></script>

<script src="/admin/js/plugin/easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="/admin/js/plugin/bootstrap-slider/bootstrap-slider.js"></script>
<script src="/admin/js/plugin/msie-fix/jquery.mb.browser.js"></script>
<script src="/admin/js/plugin/fastclick/fastclick.js"></script>
<script src="/admin/js/pnotify.custom.min.js"></script>
<script src="/admin/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="/admin/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
<!-- JQUERY VALIDATE -->
<script src="/admin/js/plugin/jquery-validate/jquery.validate.js"></script>



<script>
    $('#islocked').change(function () {
        if ($('#islocked').is(':checked')) {
            $.ajax({
                url: '/admin/showNotif',
                data: { islocked: parseInt(1), name:'islocked' },
                type: 'POST',
                dataType: "json",
                beforeSend: function (xhr) { // Add this line
                    xhr.setRequestHeader('X-CSRF-Token', '<?= $this->request->getParam('_csrfToken'); ?>');
                },
                success: function(){
                    new PNotify({
                        title: 'Збережено!',
                        text: 'Інфо-панель відображаєтсься при запуску',
                        type: 'success'
                    });
                }
            });
        }else{
            $.ajax({
                url: '/admin/showNotif',
                data: { islocked: parseInt(0), name:'islocked'},
                type: 'POST',
                dataType: "json",
                beforeSend: function (xhr) { // Add this line
                    xhr.setRequestHeader('X-CSRF-Token', '<?= $this->request->getParam('_csrfToken'); ?>');
                },
                success: function(){
                    new PNotify({
                        title: 'Success!',
                        text: 'Інфо-панель не відображаєтсься',
                        type: 'success'
                    });
                }
            });
        }
    });
</script>
<script>
    $(document).ready(function () {
        setup_widgets_desktop();

        $(function(){

        var current = location.pathname;

        $('#nav li a').each(function(){

            var self = $(this);

            // if the current path is like this link, make it active
            if(self.attr('href').indexOf(current) !== -1){
                let parent_bro = self.closest( "li" );
                console.log();
                parent_bro.addClass('active');


            }
        })
    })


    });
</script>
<?php if(!empty($options) && $options['islocked'] == 1){?>
    <script>
        jQuery(function(){
            jQuery('#activity').click();
        });
    </script>

<?php }?>

<?= $this->fetch('pageScript'); ?>

</html>



