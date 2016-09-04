<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-lg-offset-2">
            <?= $form->field($model, 'name') ?>
        </div>

        <div class="col-lg-4">
            <?= $form->field($model, 'email') ?>
        </div>

        <div class="col-lg-4 col-lg-offset-6">
            <div class="form-group pull-right">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
            </div>
        </div>


    </div>
</div>


<?php ActiveForm::end(); ?>