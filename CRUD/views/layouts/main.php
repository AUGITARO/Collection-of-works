<?php

/** @var yii\web\View $this */
/** @var string $content */

use yii\helpers\Html;

?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <?= $this->render('_main-header') ?>

    <main>
        <?= $content ?>
    </main>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
