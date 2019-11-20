<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\Nav;

/* @var $this yii\web\View */
/* @var $model \app\models\Profile*/

$this->title = 'Просмотр профиля';
$this->params['breadcrumbs'][] = $this->title;

//\yii\helpers\VarDumper::dump($model->user,10,true);
//\yii\helpers\VarDumper::dump(\app\models\User::findOne(['id'=>8])->profile,10,true);


?>
<div class="user-profile">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'email',
            'fname',
            'name',
            'mname',
            'city',
        ],]); ?>



</div>