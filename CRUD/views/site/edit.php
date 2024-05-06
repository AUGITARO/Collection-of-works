<?php

/** @var yii\web\View $this */
/** @var app\models\forms\EditEntityForm $model */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap5\ActiveForm;

?>
<h1>Entity «<?= Html::encode($model->name) ?>» Edit</h1>

<?php $form = ActiveForm::begin([
    'action' => Url::to(['site/edit', 'id' => $model->entity_id]),
    'method' => 'post',
    'enableAjaxValidation' => false,
    'options' => [
        'class' => 'p-4  border border-dark border-1 rounded rounded-4',
        'enctype' => 'application/x-www-form-urlencoded',
        'style' => 'background-color: #fbf7f7;',
    ],
    'fieldConfig' => [
        // 'options' => ['class' => ''],
        // 'inputOptions' => ['class' => ''],
        // 'labelOptions' => ['class' => ''],
        // 'errorOptions' => ['class' => ''],
        'template' => '{label}{input}{error}',
    ],
]); ?>

    <?= $form->field($model, 'name')->input('text', ['placeholder' => 'Название элемента']) ?>
    <?= Html::submitInput('Создать') ?>

<?php ActiveForm::end(); ?>
