<?php

/** @var yii\web\View $this */
/** @var app\models\Entity[] $entities */

use yii\helpers\Html;
use yii\helpers\Url;

?>
<h1>Entity List</h1>

<ul>

    <?php foreach ($entities as $entity): ?>
        <li style="width: 300px; margin-top: 10px; border: 1px solid #000;">
            <p><?= Html::encode($entity->name) ?></p>
            <a href="<?= Url::to(['site/edit', 'id' => $entity->id]) ?>">Редактировать</a>
            <a href="<?= Url::to(['site/delete', 'id' => $entity->id]) ?>">Удалить</a>
        </li>
    <?php endforeach; ?>

</ul>
