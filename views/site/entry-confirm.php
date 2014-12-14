<?php
/**
 * Created by PhpStorm.
 * User: Young
 * Date: 14-12-14
 * Time: 上午1:17
 */
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>