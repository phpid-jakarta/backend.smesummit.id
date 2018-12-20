<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Speaker */

$this->title = 'Create Speaker';
$this->params['breadcrumbs'][] = ['label' => 'Speakers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="speaker-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
