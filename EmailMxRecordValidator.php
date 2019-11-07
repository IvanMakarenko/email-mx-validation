<?php

namespace makarenko-i-v\email-mx-validation;

use Yii;
use yii\validators\Validator;

class EmailMxRecordValidator extends Validator
{
    public function validateAttribute($model, $attribute)
    {
        list($user, $domain) = explode('@', $model->{$attribute});
        if ($domain && !checkdnsrr($domain, 'MX')) {
            $this->addError($model, $attribute, Yii::t('yii', 'Check e-mail for correctness'));
        }
    }
}
