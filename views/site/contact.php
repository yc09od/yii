<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use app\assets\AppAsset;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;

AppAsset::addScript($this,"@web/js/contact.js");
AppAsset::addCss($this,"@web/css/page/site/contact.css");
AppAsset::addCss($this,"@web/vendor/bootstrap-social-gh-pages/bootstrap-social.css");
AppAsset::addCss($this,"@web/vendor/bootstrap-social-gh-pages/assets/css/font-awesome.css");
?>
<div id = "contact" class="site-contact container-fluid row">
    <div class="container">
        <div class="col-lg-6 col-lg-offset-3">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>

        <div class="col-lg-6 col-lg-offset-3" data-bind = "foreach : board_content().SocialLink">
            <a class="btn btn-social-icon pull-right" data-bind = "css : 'btn-' + title,attr:{href : link}">
                <span class="fa" data-bind = "css : 'fa-' + title"></span>
            </a>
        </div>

        <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

            <div class="alert alert-success">
                Thank you for contacting us. We will respond to you as soon as possible.
            </div>

            <p>
                Note that if you turn on the Yii debugger, you should be able
                to view the mail message on the mail panel of the debugger.
                <?php if (Yii::$app->mailer->useFileTransport): ?>
                    Because the application is in development mode, the email is not sent but saved as
                    a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                                                                                                        Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                    application component to be false to enable email sending.
                <?php endif; ?>
            </p>

        <?php else: ?>

            <div class="clearfix"></div>
            <div class="col-lg-6 col-lg-offset-3 margin-top-2">
                <p>
                    If you have any questions, please fill out the following form to contact me.
                    It is expected to hear from you.
                </p>

                <div class="row">
                    <div class="col-lg-12">

                        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                        <?= $form->field($model, 'email') ?>

                        <?= $form->field($model, 'subject') ?>

                        <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                            'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                        ]) ?>

                        <div class="form-group">
                            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>

                    </div>
                </div>
            </div>


        <?php endif; ?>
    </div>
</div>
