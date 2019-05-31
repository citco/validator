<?php
namespace Citco\Validator;

class Validator extends \Illuminate\Validation\Validator {

	public function validateEmail($attribute, $value)
	{
		return ! str_contains($value, '+') && filter_var($value, FILTER_VALIDATE_EMAIL);
	}
}
