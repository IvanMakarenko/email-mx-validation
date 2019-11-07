Email MX Validator for Yii2
===================================

Using
```php
public function rules()
    {
        return [
            ...
            ['email', EmailMxRecordValidator::class],
            ...
        ];
    }
```
