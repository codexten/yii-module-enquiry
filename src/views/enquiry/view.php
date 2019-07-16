<?php

use yii\widgets\DetailView;

?>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'name',
        'email',
        'mobile',
        'message',
    ],
]) ?>

