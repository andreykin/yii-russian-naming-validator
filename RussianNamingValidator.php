<?php
/**
 * RussianNamingValidator verifies if the attribute represents a First name (given name), Patronymic or Family name (surname)
 * in Russian naming customs.
*
* By setting the {@link formatName} property, one can specify what format the given value
* must be in. If the given date value doesn't follow the format, the attribute is considered as invalid.
*
* @author Andrey Kapustin <mail@andreyko.ru>
* @link http://www.andreyko.ru/
* @copyright 2015 Andrey Kapustin
* @license https://github.com/andreykin/yii-russian-naming-validator/blob/master/LICENSE.md
*/
class RussianNamingValidator extends CRegularExpressionValidator
{
	const FORMAT_ANY = 0;
	const FORMAT_FIRSTNAME	= 'firstname';
	const FORMAT_LASTNAME	= 'lastname';
	const FORMAT_SURNAME	= 'surname';
	
	/**
	 * @var const the predefined format pattern that the name value should follow.
	 * Defaults to 'FORMAT_ANY'.
	 */
	public $formatName=RussianNamingValidator::FORMAT_ANY;
	
	/**
	 * @var string regexp that any part or name should match
	 */
	private $patternAny="/^([\p{Cyrillic}\s]+-)*[\p{Cyrillic}\s]+$/ui";
	// i - case insensitive
	// u - UTF-8
	/**
	 * @var boolean whether the attribute value can be null or empty. Defaults to true,
	 * meaning that if the attribute is empty, it is considered valid.
	 */
	public $allowEmpty=true;
	/**
	 * Validates the attribute of the object.
	 * If there is any error, the error message is added to the object.
	 * @param CModel $object the object being validated
	 * @param string $attribute the attribute being validated
	 */
	protected function validateAttribute($object,$attribute)
	{
		switch ($this->formatName) {
			case RussianNamingValidator::FORMAT_ANY:
				$this->pattern = $this->patternAny;
				break;
			default:
				$this->pattern = $this->patternAny;
		}
		
		return parent::validateAttribute($object, $attribute);
	}
}
