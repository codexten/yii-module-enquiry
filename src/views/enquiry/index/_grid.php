<?php

use yii\grid\GridView;
use yii\grid\SerialColumn;

?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        [
            'class' => SerialColumn::class,
        ],
        'created_at:date',
        'name',
        'email',
        'mobile',
        'message',
        [
            'class' => 'yii\grid\ActionColumn',
            'options' => ['style' => 'width: 5%'],
            'template' => '{view} {delete}',
        ],
    ],
]); ?>
