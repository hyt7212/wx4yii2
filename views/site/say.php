<?php
/**
 * Created by PhpStorm.
 * User: SeanHwang
 * Date: 2014/12/12
 * Time: 21:08
 */
use yii\helpers\Html;

$this->title = 'hello title';
$this->registerMetaTag(['name' => 'keywords', 'content' => 'yii, framework, php']);
?>
<?= Html::encode($this->title) ?>
<?= html::encode($message) ?>