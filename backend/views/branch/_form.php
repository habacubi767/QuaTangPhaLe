<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Branch */
/* @var $form yii\bootstrap\ActiveForm */
?>

<?php $form = ActiveForm::begin([
    'id' => 'branch-form',
    'enableClientValidation' => true,
]); ?>
<div class="form-body">
    <h3 class="form-section">Thông tin chi nhánh</h3>
    <div class="row">
        <div class="col-md-6">
            <?php echo $form->field($model, 'name', ['template'=>'{label}{input}{error}'])->textInput(['maxlength' => true, 'class'=>'form-control']) ?>
        </div>
        <div class="col-md-6">
            <?php echo $form->field($model, 'address', ['template'=>'{label}{input}{error}'])->textInput(['maxlength' => true, 'class'=>'form-control']) ?>
        </div>
    </div>
    <!--/row-->
    <div class="row">
        <div class="col-md-6">
            <?php echo $form->field($model, 'owner', ['template'=>'{label}{input}{error}'])->textInput(['maxlength' => true, 'class'=>'form-control']) ?>
        </div>
        <!--/span-->
        <div class="col-md-6">
            <?php echo $form->field($model, 'tel', ['template'=>'{label}{input}{error}'])->textInput(['maxlength' => true, 'class'=>'form-control']) ?>
        </div>
        <!--/span-->
    </div>
    <!--/row-->
    <div class="row">
        <div class="col-md-6">
            <?php echo $form->field($model, 'fax', ['template'=>'{label}{input}{error}'])->textInput(['maxlength' => true, 'class'=>'form-control']) ?>
        </div>
        <!--/span-->
        <div class="col-md-6">
            <?php echo $form->field($model, 'email', ['template'=>'{label}{input}{error}'])->textInput(['maxlength' => true, 'aria-describedby'=>"email-error", 'class'=>'form-control']) ?>
        </div>
        <!--/span-->
    </div>
    <div class="row">
        <div class="col-md-6">
            <?php echo $form->field($model, 'website', ['template'=>'{label}{input}{error}'])->textInput(['maxlength' => true, 'class'=>'form-control']) ?>
        </div>
        <!--/span-->
        <div class="col-md-6">
            <?php echo $form->field($model, 'hotline', ['template'=>'{label}{input}{error}'])->textInput(['maxlength' => true, 'class'=>'form-control']) ?>
        </div>
        <!--/span-->
    </div>
    <div class="row">
        <div class="col-md-6">
            <?php echo $form->field($model, 'is_master')->textInput(['maxlength' => true, 'class'=>'form-control', 'template'=>'<label class="control-label col-md-3">{label}</label><div class="col-md-9">{input}<span class="help-block">{error}</span></div>']) ?>
        </div>
        <!--/span-->
        <div class="col-md-6">
            <?php echo $form->field($model, 'parent_id')->textInput(['maxlength' => true, 'class'=>'form-control', 'template'=>'<label class="control-label col-md-3">{label}</label><div class="col-md-9">{input}<span class="help-block">{error}</span></div>']) ?>
        </div>
        <!--/span-->
    </div>
    <!--/row-->
</div>
<?php ActiveForm::end(); ?>

