<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class IndexForm extends Model
{
    public $name;
    public $phone;
    public $position;
    public $country;
    public $region;
    public $city;
    //public $enableClientScript = true;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'phone'], 'required'],
            [['position', 'country', 'region', 'city'], 'safe'],
            ['name', 'match', 'pattern' => '/^[а-яА-ЯёЁ\s]+$/u', 'message' => 'Используйте русские буквы'],
            ['phone', 'match', 'pattern' => '/^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/', 'message' => 'Введите существующий номер'],


        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'phone' => 'Телефон',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
            ->setReplyTo([$this->email => $this->name])
            ->setSubject($this->phone)
            ->setTextBody($this->body)
            ->send();
    }
}
