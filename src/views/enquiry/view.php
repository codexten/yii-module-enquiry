<?php

use codexten\yii\web\widgets\Page;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model codexten\yii\modules\enquiry\models\Enquiry */

$this->title = $model->name;
?>

<?php $page = Page::begin([
    'title' => $this->title,
]) ?>

<?php $page->beginContent('content') ?>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'name',
        'email',
        'mobile',
        'message',
    ],
]) ?>

<?php $page->endContent() ?>

<?php $page->end() ?>
