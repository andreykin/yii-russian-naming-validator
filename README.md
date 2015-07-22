# Yii Russian Naming Validator

Verifies if the attribute represents a First name (given name), Patronymic or Family name (surname) in Russian naming customs.

[Samples](#samples)  
[Installation](#installation)  
[Configuration](#configuration)  
[Usage](#usage)  
[License](#license)  

## Samples 
#### Invalid values 

		Abcdefghijklmopqrstuvwxyz
		1234567890
		-Иванов
		Пьер--Анри

#### Valid values 

		Абвгдеёжзийклмнопрстуфхцчшщъыьэюя
		Петрова-Водкина
		Пьер-Анри Симон
		Пьер - Анри Симон


## Installation

### Manual Installation

Download the [latest version](https://github.com/andreyka/yii-russian-naming-validator/archive/master.zip) and move to the `RussianNamingValidator` folder into your `protected/extensions/validators` folder.

## Configuration

It is not necessary, but if you want to use this validator in many models, you may want to add it in autoloading.

### Add autoloading through config.php
Add the path to yii-russian-naming-validator to the `import` in your yii configuration:

```php
  'import'=>array(
    'application.ext.validators.RussianNamingValidator.*',
    ...
  )
```

or
### Import in rules() function in your Model

```php
public function rules()
{
  Yii::import('application.ext.validators.RussianNamingValidator.*');
  ... 
);
```

## Usage

In your model rules() function add validator to the needed attributes, like in the following examples.

```php
array('firstname, lastname, fathername', 'ext.validators.RussianNamingValidator.RussianNamingValidator'),
```

or if you use autoloading
```php
array('firstname, lastname, fathername', 'RussianNamingValidator'),
```

## License

- Author: Andrey V. Kapustin <mail@andreyko.ru>
- Source Code: https://github.com/andreykin/yii-russian-naming-validator
- Copyright © 2014 Andrey V. Kapustin <mail@andreyko.ru>
- License: BSD-2-Clause https://raw.github.com/cornernote/yii-russian-naming-validator/master/LICENSE
