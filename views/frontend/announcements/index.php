<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\AssetBundle;
use yii\bootstrap\Modal;
use \kouosl\theme\bundles\SettingAsset;
foreach($model as  $key=>$value){
  
echo '<div class="list-group">
   
    <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading">' . $value['title'].'</h4>
      <p class="list-group-item-text">'.$users[$key].'</p>
    </a>';
    
    Modal::begin([
      'header' => '<h4>'.$value['title'].'</h4>',
      'toggleButton' => ['label' => '<div class="btn btn-success">Ayrıntı için tıklayınız</div>'],
     ]);
  
    echo $value['content'];
  
  Modal::end();
}





  ?>

