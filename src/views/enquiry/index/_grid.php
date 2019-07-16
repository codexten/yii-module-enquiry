<?php

use yii\grid\GridView; ?>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
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
