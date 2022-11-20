<?php
/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */

/** @var frontend\models\IndexForm $model */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use frontend\models\IndexForm;
use yii\widgets\MaskedInput;
use yii\widgets\Pjax;
/** @var yii\web\View $this */

?>

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
    <?= $form->field($model, 'phone')->textInput(['class' => 'form-control br-50'])->label(false) ?>
    <div class="text-danger"></div>
    <!-- <small class="mt-1">Ваше сообщение</small>
    <textarea class="form-control" name="text" id="txt"></textarea> -->

    <small class="text-muted text-center mt-4 d-block mb-1"><i class="fa fa-lock"></i><img src="img/icons/shield.svg" width="16"> Ваши данные надежно защищены</small>

    <?= Html::submitButton('Отправить', ['class' => 'btn btn-warning w-100 submit', 'name' => 'contact-button']) ?>
    <div id="result"></div>
</div>
<?php ActiveForm::end();


$js = <<<JS

var form = $('#form');
form.on('beforeSubmit', function (e){
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
