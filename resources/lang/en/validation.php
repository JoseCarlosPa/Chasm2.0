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

    'accepted'             => 'El :attribute debe ser aceptado.',
    'active_url'           => 'El :attribute no es una URL válida.',
    'after'                => 'El :attribute debe ser después de la fecha :date.',
    'after_or_equal'       => 'El :attribute debe ser después o igual a :date.',
    'alpha'                => 'El :attribute sólo debe contener letras.',
    'alpha_dash'           => 'El :attribute sólo debe contender letras, números, slashes o guión bajo.',
    'alpha_num'            => 'El :attribute sólo debe contener números y letras.',
    'array'                => 'El :attribute tiene que ser un arreglo.',
    'before'               => 'El :attribute tiene que ser una fecha antes de :date.',
    'before_or_equal'      => 'El :attribute tiene que ser una fecha antes o igual a :date.',
    'between'              => [
        'numeric' => 'El :attribute debe ser entre :min and :max.',
        'file'    => 'El :attribute debe ser entre :min and :max kilobytes.',
        'string'  => 'El :attribute debe ser entre :min and :max caracteres.',
        'array'   => 'El :attribute debe ser entre :min and :max items.',
    ],
    'boolean'              => 'El :attribute debe ser falso o verdadero.',
    'confirmed'            => 'La :attribute de confirmación no coincide.',
    'date'                 => 'La :attribute no es una fecha válida.',
    'date_format'          => 'El :attribute no coincide con el formato :format.',
    'different'            => 'El :attribute and :other deben ser diferentes.',
    'digits'               => 'El :attribute debe ser de :digits dígitos.',
    'digits_between'       => 'El :attribute debe tener entre :min a :max dígitos.',
    'dimensions'           => 'El :attribute tiene dimensiones inválidas para imagen.',
    'distinct'             => 'El  campo :attribute tiene un valor duplicado.',
    'email'                => 'El :attribute debe ser un correo electrónico válido.',
    'exists'               => 'El :attribute elegido es inválido.',
    'file'                 => 'El :attribute debe ser un archivo.',
    'filled'               => 'El campo :attribute debe tener un valor.',
    'gt'                   => [
        'numeric' => 'El :attribute debe ser más grande que :value.',
        'file'    => 'El :attribute debe ser más grande que :value kilobytes.',
        'string'  => 'El :attribute debe ser más grande que :value caracteres.',
        'array'   => 'El :attribute debe ser más grande que :value objetos.',
    ],
    'gte'                  => [
        'numeric' => 'El :attribute debe ser más grande o igual que :value.',
        'file'    => 'El :attribute debe ser más grande o igual que :value kilobytes.',
        'string'  => 'El :attribute debe ser más grande o igual que :value caracteres.',
        'array'   => 'El :attribute debe tener :value objetos o más.',
    ],
    'image'                => 'El :attribute debe ser una imagen.',
    'in'                   => 'El :attribute seleccionado es inválido.',
    'in_array'             => 'El campo :attribute no existe en :other.',
    'integer'              => 'El :attribute debe ser un entero.',
    'ip'                   => 'El :attribute debe ser una dirección IP válida.',
    'ipv4'                 => 'El :attribute debe ser una dirección IPv4 válida.',
    'ipv6'                 => 'El :attribute debe ser una dirección IPv6 válida.',
    'json'                 => 'El :attribute debe ser un string válido de JSON.',
    'lt'                   => [
        'numeric' => 'El :attribute debe ser menor que :value.',
        'file'    => 'El :attribute debe ser menor que :value kilobytes.',
        'string'  => 'El :attribute debe ser menor que :value caracteres.',
        'array'   => 'El :attribute debe ser menor que :value objetos.',
    ],
    'lte'                  => [
        'numeric' => 'El :attribute debe ser menor o igual a :value.',
        'file'    => 'El :attribute debe ser menor o igual a :value kilobytes.',
        'string'  => 'El :attribute debe ser menor o igual a :value caracteres.',
        'array'   => 'El :attribute no debe tener más de :value objetos.',
    ],
    'max'                  => [
        'numeric' => 'El :attribute no debe ser mayor a :max.',
        'file'    => 'El :attribute no debe ser mayor a :max kilobytes.',
        'string'  => 'El :attribute no debe ser mayor a :max caracteres.',
        'array'   => 'El :attribute no debe ser mayor a :max objetos.',
    ],
    'mimes'                => 'The :attribute debe ser un archivo tipo: :values.',
    'mimetypes'            => 'The :attribute debe ser un archivo tipo: :values.',
    'min'                  => [
        'numeric' => 'El :attribute debe tener al menos :min.',
        'file'    => 'El :attribute debe tener al menos :min kilobytes.',
        'string'  => 'El :attribute debe tener al menos :min caracteres.',
        'array'   => 'El :attribute debe tener al menos :min objetos.',
    ],
    'not_in'               => 'El :attribute seleccionado es inválido',
    'not_regex'            => 'El formato :attribute es inválido.',
    'numeric'              => 'El :attribute debe ser un número.',
    'present'              => 'El campo :attribute debe estar presente.',
    'regex'                => 'El formato :attribute es inválido.',
    'required'             => 'El campo :attribute es requerido.',
    'required_if'          => 'El campo :attribute es requerido cuando :other es :value.',
    'required_unless'      => 'El campo :attribute es requerido a menos que :other esté en :values.',
    'required_with'        => 'El campo :attribute es requerido cuando :values está presente.',
    'required_with_all'    => 'El campo :attribute es requerido cuando :values está presente.',
    'required_without'     => 'El campo :attribute es requerido cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute cuando ninguno de :values está presente.',
    'same'                 => 'El :attribute y :other deben coincidir.',
    'size'                 => [
        'numeric' => 'El :attribute debe ser :size.',
        'file'    => 'El :attribute debe tener :size kilobytes.',
        'string'  => 'El :attribute debe ser de :size characteres.',
        'array'   => 'El :attribute debe contener :size objetos.',
    ],
    'string'               => 'El :attribute debe ser un string.',
    'timezone'             => 'El :attribute debe ser una zona válida.',
    'unique'               => 'El :attribute ya fue tomado.',
    'uploaded'             => 'El :attribute falló en subirse.',
    'url'                  => 'El formato :attribute es inválido.',

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
