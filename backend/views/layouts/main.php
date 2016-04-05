<?php
/**
 * @var $this yii\web\View
 */
?>
<?php foreach (Yii::$app->session->getAllFlashes() as $message):; ?>
    <?php
    echo $message['title'];
    ?>
<?php endforeach; ?>
<?php $this->beginContent('@backend/views/layouts/common.php'); ?>
    <div class="box">
        <div class="box-body">
            <?php echo $content ?>
        </div>
    </div>
<!-- Modal form-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel"></h4>
            </div>
            <div class="modal-body" id="modal-bodyku">
            </div>
            <div class="modal-footer" id="modal-footerq">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button><button type="button" class="btn btn-primary form-submit">Save changes</button>
            </div>
        </div>
    </div>
</div>
<?php

$scripts = <<<EOD
    var url = '';
    function openForm(obj, title)
    {
        setModalBox(title,content,'large');
        $('#myModal #modal-bodyku').load($(obj).attr("data-url"), function(){
            url = $(obj).attr("data-url");
            $(this).children().children("form").submit(function(e){
                e.preventDefault();
                var formSubmit = $(this);
                var controllerPath = url;
                $.post(controllerPath, formSubmit.serialize(),
                    function (data) {
                        alert(data);
                    }
                ).error(function () {
                    alert("Registration Failed");
                });
                return false;
            });
        });        
        $('#myModal').modal('show');
    }
    $('.form-submit').click(function () {
        $(this).parent().prev().children().children("form").submit();
    });    
    function setModalBox(title,content,size)
    {
        document.getElementById('myModalLabel').innerHTML=title;
        $('#myModal').attr('class', 'modal fade bs-example-modal-lg').attr('aria-labelledby','myLargeModalLabel');
        $('.modal-dialog').attr('class','modal-dialog modal-lg');
        /*if(size == 'large')
        {
            $('#myModal').attr('class', 'modal fade bs-example-modal-lg')
                .attr('aria-labelledby','myLargeModalLabel');
            $('.modal-dialog').attr('class','modal-dialog modal-lg');
        }
        if(size == 'standart')
        {
            $('#myModal').attr('class', 'modal fade')
                .attr('aria-labelledby','myModalLabel');
            $('.modal-dialog').attr('class','modal-dialog');
        }
        if(size == 'small')
        {
            $('#myModal').attr('class', 'modal fade bs-example-modal-sm')
                .attr('aria-labelledby','mySmallModalLabel');
            $('.modal-dialog').attr('class','modal-dialog modal-sm');
        }*/
    }
EOD;
 $this->registerJs($scripts,\yii\web\View::POS_END, "process-form");
?>
<?php $this->endContent(); ?>

