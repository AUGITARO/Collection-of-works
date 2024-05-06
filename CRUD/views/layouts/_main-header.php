<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

?>
<header>
    <nav>
        <ul>
            <li><a href="<?= Url::to(['site/index']) ?>">Entity List</a></li>
            <li><a href="<?= Url::to(['site/create']) ?>">Entity Create</a></li>
        </ul>
    </nav>
</header>
