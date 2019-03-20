
    <link rel="stylesheet" href="/admin/css/pnotify.custom.min.css">

<!--    <div id="system_msg_wrapper" class="fixed system_error">-->
<!--        <div class="system_msg_top"></div>-->
<!--        <div class="system_msg_body">-->
<!--            <a class="system_msg_close"tabindex="1" style="display: none;">Close</a>-->
<!--            <div class="system_msg">-->
<!--                <span class="system_msg_title">Системне повідомлення!</span>-->
<!--                <p>--><?php //echo $message ?><!--</p>-->
<!--            </div>-->
<!--            <div style="clear:both"></div>-->
<!--        </div>-->
<!--        <div class="system_msg_bottom"></div>-->
<!--    </div>-->


<!--    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <script src="/admin/js/plugin/jquery/jquery-1.12.4.min.js"></script>
    <script src="/admin/js/libs/jquery-ui-1.10.3.min.js"></script>
<!--    <script-->
    <!--            src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"-->
    <!--            integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="-->
    <!--            crossorigin="anonymous"></script>-->
        <script>
        $( document ).ready(function() {
            new PNotify({
                title: 'Помилка!',
                text: '<?php echo $message ?>',
                type: 'error'
            });
        });
    </script>