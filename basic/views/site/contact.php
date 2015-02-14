<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'Contact Us';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

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

    <p style="height: 50px">
            <b> <em>  If you have business inquiries or other questions fill out the following form to contact us. Thank you.</em></b>
    </p>

    <div id="section">
        <h2>Manila</h2>
    <p>Box 1831, Manila
        Philippines
        Tel. 726-3021 to 24
        Fax 63-2-727-0077
        info@blind.org.ph
    </p>
    <h2>Davao</h2>
    <p>Box 80540 DCCPO
    Davao City 8000
    Tel. 225-8937
    Fax 63-82-225-8938
    davao@blind.org.ph
    </p>
    <h2>Cebu</h2>
    <p>
    Box 470 CPO
    Cebu City 6000
    Tel. 232-2004
    Fax 63-32-233-7763
    cebu@blind.org.ph
    </p>
    <h2>USA</h2>
    <p>
    Resources for the Blind
    PO Box 4499
    Columbia, SC 29240
    Telephone: 803-790-9264 
    Fax no.:803-790-9264
    info@blindusa.org
    www.blindusa.org
    </p>
    <h2>Within Metro Manila</h2>
    <p>
    726-3021 up to 24
    </p>
    <h2>Outside Mtero Manila</h2>
    <p>
    1-800-10-725-4637
    </p>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <p style="color:red"><em>Please fill up all necessary information.</em></p>
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <?= $form->field($model, 'name') ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'subject') ?>
                <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>
                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

    <?php endif; ?>
</div>
