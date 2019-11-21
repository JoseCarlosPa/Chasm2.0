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
    'active_url'           => 'El :attribute no es una URL valida.',
    'after'                => 'El :attribute debe se despues de la fecha :date.',
    'after_or_equal'       => 'El :attribute debe ser despues o igual a :date.',
    'alpha'                => 'El :attribute solo debe contener letras.',
    'alpha_dash'           => 'El :attribute solo debe contender letras, numeros, slashes o guion bajo.',
    'alpha_num'            => 'El :attribute solo debe contener numeros y letras.',
    'array'                => 'El :attribute tiene que ser un arreglo.',
    'before'               => 'El :attribute tiene que ser una fecha antes que :date.',
    'before_or_equal'      => 'El :attribute tiene que ser una fecha antes o igual a :date.',
    'between'              => [
        'numeric' => 'El :attribute debe ser entre :min and :max.',
        'file'    => 'El :attribute debe ser entre :min and :max kilobytes.',
        'string'  => 'El :attribute debe ser entre :min and :max caracetres.',
        'array'   => 'El :attribute debe ser entre :min and :max items.',
    ],
    'boolean'              => 'El :attribute debe ser cierto o falso.',
    'confirmed'            => 'La :attribute confirmacion no coincide.',
    'date'                 => 'La :attribute no es una valida fecha.',
    'date_format'          => 'El :attribute does not match the format :format.',
    'different'            => 'El :attribute and :other must be different.',
    'digits'               => 'El :attribute must be :digits digits.',
    'digits_between'       => 'El :attribute must be between :min and :max digits.',
    'dimensions'           => 'El :attribute has invalid image dimensions.',
    'distinct'             => 'El :attribute field has a duplicate value.',
    'email'                => 'El :attribute must be a valid email address.',
    'exists'               => 'El selected :attribute is invalid.',
    'file'                 => 'El :attribute must be a file.',
    'filled'               => 'El :attribute field must have a value.',
    'gt'                   => [
        'numeric' => 'El :attribute must be greater than :value.',
        'file'    => 'El :attribute must be greater than :value kilobytes.',
        'string'  => 'El :attribute must be greater than :value characters.',
        'array'   => 'El :attribute must have more than :value items.',
    ],
    'gte'                  => [
        'numeric' => 'El :attribute must be greater than or equal :value.',
        'file'    => 'El :attribute must be greater than or equal :value kilobytes.',
        'string'  => 'El :attribute must be greater than or equal :value characters.',
        'array'   => 'El :attribute must have :value items or more.',
    ],
    'image'                => 'El :attribute must be an image.',
    'in'                   => 'El selected :attribute is invalid.',
    'in_array'             => 'El :attribute field does not exist in :other.',
    'integer'              => 'El :attribute must be an integer.',
    'ip'                   => 'El :attribute must be a valid IP address.',
    'ipv4'                 => 'El :attribute must be a valid IPv4 address.',
    'ipv6'                 => 'El :attribute must be a valid IPv6 address.',
    'json'                 => 'El :attribute must be a valid JSON string.',
    'lt'                   => [
        'numeric' => 'El :attribute must be less than :value.',
        'file'    => 'El :attribute must be less than :value kilobytes.',
        'string'  => 'El :attribute must be less than :value characters.',
        'array'   => 'El :attribute must have less than :value items.',
    ],
    'lte'                  => [
        'numeric' => 'El :attribute must be less than or equal :value.',
        'file'    => 'El :attribute must be less than or equal :value kilobytes.',
        'string'  => 'El :attribute must be less than or equal :value characters.',
        'array'   => 'El :attribute must not have more than :value items.',
    ],
    'max'                  => [
        'numeric' => 'El :attribute may not be greater than :max.',
        'file'    => 'El :attribute may not be greater than :max kilobytes.',
        'string'  => 'El :attribute may not be greater than :max characters.',
        'array'   => 'El :attribute may not have more than :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'mimetypes'            => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'El :attribute must be at least :min.',
        'file'    => 'El :attribute must be at least :min kilobytes.',
        'string'  => 'El :attribute must be at least :min characters.',
        'array'   => 'El :attribute must have at least :min items.',
    ],
    'not_in'               => 'El selected :attribute is invalid.',
    'not_regex'            => 'El :attribute format is invalid.',
    'numeric'              => 'El :attribute must be a number.',
    'present'              => 'El :attribute field must be present.',
    'regex'                => 'El :attribute format is invalid.',
    'required'             => 'El :attribute field is required.',
    'required_if'          => 'El :attribute field is required when :other is :value.',
    'required_unless'      => 'El :attribute field is required unless :other is in :values.',
    'required_with'        => 'El :attribute field is required when :values is present.',
    'required_with_all'    => 'El :attribute field is required when :values is present.',
    'required_without'     => 'El :attribute field is required when :values is not present.',
    'required_without_all' => 'El :attribute field is required when none of :values are present.',
    'same'                 => 'El :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'El :attribute must be :size.',
        'file'    => 'El :attribute must be :size kilobytes.',
        'string'  => 'El :attribute must be :size characters.',
        'array'   => 'El :attribute must contain :size items.',
    ],
    'string'               => 'El :attribute must be a string.',
    'timezone'             => 'El :attribute must be a valid zone.',
    'unique'               => 'El :attribute has already been taken.',
    'uploaded'             => 'El :attribute failed to upload.',
    'url'                  => 'El :attribute format is invalid.',

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
