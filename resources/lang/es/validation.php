<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"accepted"             => "El :attribute debe ser aceptado.",
	"active_url"           => "El :attribute no es una URL válida.",
	"after"                => "El :attribute debe ser una fecha posterior a :date.",
	"alpha"                => "El :attribute solo puede contener letras.",
	"alpha_dash"           => "El :attribute solo puede contener letras, número o guiones",
	"alpha_num"            => "El :attribute solo puede contener números y letras.",
	"array"                => "El :attribute debe ser una matriz",
	"before"               => "El :attribute debe ser una fecha anterior a :date.",
	"between"              => [
		"numeric" => "The :attribute debe estar entre :min y :max.",
		"file"    => "The :attribute debe estar entre :min y :max kilobytes.",
		"string"  => "The :attribute debe estar entre :min y :max characters.",
		"array"   => "The :attribute debe estar entre :min y :max items.",
	],
	"boolean"              => "El :attribute campo debe ser verdadero o falso.",
	"confirmed"            => "El :attribute confirmación no coincide.",
	"date"                 => "El :attribute no es una fecha válida.",
	"date_format"          => "El :attribute no tiene el formato :format.",
	"different"            => "El :attribute y :other deben ser diferentes.",
	"digits"               => "El :attribute deben ser :digits digitos.",
	"digits_between"       => "El :attribute debe estar entre :min y :max digitos.",
	"email"                => "El :attribute debe ser una dirección de correo electrónico válida.",
	"filled"               => "El :attribute campo es requerido.",
	"exists"               => "El  :attribute seleccionado es inválido",
	"image"                => "El :attribute debe ser una imagen.",
	"in"                   => "El :attribute seleccionado es inválido.",
	"integer"              => "El :attribute debe ser un número entero.",
	"ip"                   => "El :attribute debe ser una IP válida.",
	"max"                  => [
		"numeric" => "El :attribute no puede ser más grande que el :max.",
		"file"    => "El :attribute no puede ser más grande que :max kilobytes.",
		"string"  => "El :attribute no puede ser más grande que  :max caracteres.",
		"array"   => "El :attribute no puede tener más qeu  :max artículos.",
	],
	"mimes"                => "The :attribute debe ser un fichero de tipo: :values.",
	"min"                  => [
		"numeric" => "El :attribute debe ser al menos de :min.",
		"file"    => "El :attribute debe ser al menos de :min kilobytes.",
		"string"  => "El :attribute debe ser al menos de  :min caracteres.",
		"array"   => "El :attribute debe tener al menos  :min artículos.",
	],
	"not_in"               => "El :attribute seleccionado es inválido.",
	"numeric"              => "El :attribute debe ser un número",
	"regex"                => "El :attribute formato no es válido.",
	"required"             => "El :attribute campo es requerido.",
	"required_if"          => "El :attribute field es requerido cuando  :other es :value.",
	"required_with"        => "El :attribute field es requerido cuando :values está presente.",
	"required_with_all"    => "El :attribute field es requerido cuando  :values está presente.",
	"required_without"     => "El :attribute field es requerido cuando  :values no está presente.",
	"required_without_all" => "El :attribute field es requerido cunado ninguno de los :values están presentes.",
	"same"                 => "El :attribute y :other debe coincidir.",
	"size"                 => [
		"numeric" => "El :attribute debe tener :size.",
		"file"    => "El :attribute debe tener :size kilobytes.",
		"string"  => "El :attribute debe tener :size caracteres.",
		"array"   => "El :attribute debe contener :size artículos.",
	],
	"unique"               => "El :attribute ya se ha elegido.",
	"url"                  => "El :attribute formato no es válido.",
	"timezone"             => "El :attribute debe ser una zona válida.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => [
		'attribute-name' => [
			'rule-name' => 'custom-message',
		],
	],

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => [],

];
