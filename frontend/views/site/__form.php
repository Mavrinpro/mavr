<?php
/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */

/** @var frontend\models\IndexForm $model */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
//use frontend\models\IndexForm;
use yii\widgets\MaskedInput;
use yii\widgets\Pjax;
/** @var yii\web\View $this */

?>
<?php Pjax::begin(); ?>
<?php $form = ActiveForm::begin([
    'id' => 'form',
    'validateOnBlur' => true,
    'enableClientValidation' => true,
    'enableClientScript' => true,


]); ?>
<div class="form-group">
    <small class="mt-1">Ваше имя</small>
    <?=
    $form->field($model, 'name')->textInput(['class' => 'form-control br-50', 'placeholder' => 'Имя', ])->label(false) ?>
    <div class="text-danger"></div>
    <small class="mt-1">Ваш номер</small>
    <?= $form->field($model, 'phone')->widget(MaskedInput::class, ['mask' => '+7 (999)-999-99-99','clientOptions' => [
        'removeMaskOnSubmit' => true,
        'options' => ['class' => 'br-50', 'useSessionFlash' => true,'style'=>'display:none'],
        'clientOptions'=>[
            'clearIncomplete'=>false
        ]
    ]])->textInput(['class' => 'form-control br-50', 'placeholder' => 'Номер телефона', ])->label(false) ?>
    <?= $form->field($model, 'position')->hiddenInput(['value' => 'modal'])->label(false) ?>
    <div class="text-danger"></div>
    <!-- <small class="mt-1">Ваше сообщение</small>
    <textarea class="form-control" name="text" id="txt"></textarea> -->

    <small class="text-muted text-center mt-4 d-block mb-1"><i class="fa fa-lock"></i><img src="img/icons/shield.svg" width="16" alt="img"> Ваши данные надежно защищены</small>

    <?= Html::submitButton('Отправить', ['class' => 'btn btn-warning w-100 submit', 'name' => 'contact-button']) ?>
    <div id="result"></div>
</div>
<?php ActiveForm::end();
Pjax::end();

$js = <<<JS

var form = $('#form');
form.on('beforeSubmit', function (){
    var btn_send = $('.submit');
    var data = form.serialize();
    $.ajax({
    url: form.attr('action'),
    type: 'POST',
    data: data,
    beforeSend: (function(){
            $('.submit').addClass('progress-bar progress-bar-striped progress-bar-animated bg-warning');
        }),
    success: function (res){
        console.log(res);
         btn_send.removeClass('progress-bar progress-bar-striped progress-bar-animated');
        setTimeout(function (){
            form.trigger('reset');
            inst.close();
                        $('body').append('<div class="alert alert-warning rounded-0 p-1 mt-2 fixed-top p-2">Спасибо! Я получил ваше сообщение. Свяжусь с вами в ближашее время.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        },3000)
        
    },
    error: function (){
        alert('error');
    }
    });
    return false;
});


JS;
$this->registerJs($js);
?>
