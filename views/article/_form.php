<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use dosamigos\ckeditor\CKEditor;
use yii\helpers\HtmlPurifier;


/** @var yii\web\View $this */
/** @var app\models\Article $model */
/** @var yii\widgets\ActiveForm $form */
?>
<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Caticle</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>

<div class="article-form wow fadeIn" data-wow-delay="0.1s" style=" visibility: visible; animation-delay: 0.1s; animation-name: fadeIn">



    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true, 'style' => 'border: 1px solid; ']) ?>

    <?= $form->field($model, 'imageFile')->fileInput(['class'=> 'my-3' ]) ?>

    <?= $form->field($model, 'body')->widget(CKEditor::class, [
        'options' => ['rows' => 6],
        'preset' => 'full'
    ]) ?>


    <div class="form-group mt-3">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
</div>
</body>
</html>
