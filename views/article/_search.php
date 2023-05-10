<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ArticleBlog $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="article-search mb-3 w-50">
    <div class=" wow fadeIn" data-wow-delay="0.2s">
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

        <div style="display: flex; align-items: center; justify-content: center;">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true, 'style' => ' width: 200px; font-size: 15px', 'placeholder'=>'Search for title or word'])->label('') ?>
            <div class="form-group" style="display: flex; justify-content: center; margin-top: 25px; margin-left: 5px">
                <?= Html::submitButton('Search', ['class' => 'btn btn-primary', 'style' => 'background-color: blue; color: white;', 'onmouseover' => 'this.style.backgroundColor="#0081B4"; this.style.color="#fff";', 'onmouseout' => 'this.style.backgroundColor="blue"; this.style.color="white";']) ?>
                <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary', 'style' => 'background-color: gray; color: white; margin-left: 10px;', 'onmouseover' => 'this.style.backgroundColor="black"; this.style.color="#fff";', 'onmouseout' => 'this.style.backgroundColor="gray"; this.style.color="white";']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
