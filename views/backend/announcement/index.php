<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kouosl\announcement\models\BoardSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Announcements';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="announcement-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create announcement', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            'content:ntext',
            'priority',
            'date',
            //'author',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
