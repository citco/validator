<?php
namespace Citco\Validator;

class Validator extends \Illuminate\Validation\Validator {

	protected function validateEmail($attribute, $value)
	{
		if((! str_contains($value, '+')) && filter_var($value, FILTER_VALIDATE_EMAIL))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
