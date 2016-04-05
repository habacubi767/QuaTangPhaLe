<?php

use yii\helpers\Html;
use \kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\BranchSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Chi nhánh';
$this->params['breadcrumbs'][] = "Chi nhánh";
?>
<div class="branch-index">
    <?php
    $gridColumns = [
        ['class' => 'kartik\grid\SerialColumn'],
        [
            'class' => 'kartik\grid\EditableColumn',
            'attribute' => 'name',
            'pageSummary' => 'Page Total',
            'vAlign'=>'middle',
            'headerOptions'=>['class'=>'kv-sticky-column'],
            'contentOptions'=>['class'=>'kv-sticky-column'],
            'editableOptions'=>['header'=>'Name', 'size'=>'md']
        ],
        [
            'attribute'=>'address',
            /*'value'=>function ($model, $key, $index, $widget) {
                return "<span class='badge' style='background-color: {$model->name}'> </span>  <code>" .
                $model->name . '</code>';
            },*/
            //'filterType'=>GridView::FILTER_COLOR,
            'vAlign'=>'middle',
            'format'=>'raw',
            'width'=>'150px',
            'noWrap'=>true
        ],
        [
            'class'=>'kartik\grid\BooleanColumn',
            'attribute'=>'is_master',
            'vAlign'=>'middle',
        ],
        ['class' => 'kartik\grid\CheckboxColumn']
    ];
    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumns,
        'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
        'toolbar' =>  [
            ['content'=>
                Html::button('<i class="glyphicon glyphicon-plus"></i>', ['type'=>'button', 'title'=>Yii::t('kvgrid', 'Add Book'), 'class'=>'btn btn-success', 'onclick'=>'openForm(this, "Thêm chi nhánh")', 'data-url'=> Yii::$app->urlManager->createUrl('branch/create')]) . ' '.
                Html::a('<i class="glyphicon glyphicon-repeat"></i>', ['index'], ['data-pjax'=>0, 'class' => 'btn btn-default', 'title'=>Yii::t('kvgrid', 'Reset Grid')])
            ],
            '{export}',
            '{toggleData}'
        ],
        'pjax' => true,
        'bordered' => true,
        'striped' => false,
        'condensed' => false,
        'responsive' => true,
        'hover' => true,
        'floatHeader' => true,
        //'floatHeaderOptions' => ['scrollingTop' => $scrollingTop],
        'showPageSummary' => false,
        'panel' => [
            'type' => GridView::TYPE_PRIMARY
        ],
    ]);
    ?>
</div>