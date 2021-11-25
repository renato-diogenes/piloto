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

    'accepted' => 'O :attribute deve ser aceito.',
    'accepted_if' => 'O :attribute deve ser aceito quando :other é :value.',
    'active_url' => 'O :attribute não é um URL válido.',
    'after' => 'O :attribute deve ser uma data depois :date.',
    'after_or_equal' => 'O :attribute deve ser uma data posterior ou igual a :date.',
    'alpha' => 'O :attribute deve conter apenas letras.',
    'alpha_dash' => 'O :attribute deve conter apenas letras, números, travessões e sublinhados.',
    'alpha_num' => 'O :attribute deve conter apenas letras e números.',
    'array' => 'O :attribute deve ser uma vetor.',
    'before' => 'O :attribute deve ser uma data antes :date.',
    'before_or_equal' => 'O :attribute deve ser uma data anterior ou igual a :date.',
    'between' => [
        'numeric' => 'O :attribute must be between :min e :max.',
        'file' => 'O :attribute must be between :min e :max kilobytes.',
        'string' => 'O :attribute must be between :min e :max characters.',
        'array' => 'O :attribute must have between :min e :max items.',
    ],
    'boolean' => 'O :attribute field must be true or false.',
    'confirmed' => 'O :attribute confirmation does not match.',
    'current_password' => 'O password is incorrect.',
    'date' => 'O :attribute is not a valid date.',
    'date_equals' => 'O :attribute must be a date equal to :date.',
    'date_format' => 'O :attribute does not match the format :format.',
    'declined' => 'O :attribute must be declined.',
    'declined_if' => 'O :attribute must be declined when :other is :value.',
    'different' => 'O :attribute e :other must be different.',
    'digits' => 'O :attribute must be :digits digits.',
    'digits_between' => 'O :attribute must be between :min e :max digits.',
    'dimensions' => 'O :attribute has invalid image dimensions.',
    'distinct' => 'O :attribute field has a duplicate value.',
    'email' => 'O :attribute must be a valid email address.',
    'ends_with' => 'O :attribute must end with one of the following: :values.',
    'exists' => 'O selected :attribute is invalid.',
    'file' => 'O :attribute must be a file.',
    'filled' => 'O :attribute field must have a value.',
    'gt' => [
        'numeric' => 'O :attribute must be greater than :value.',
        'file' => 'O :attribute must be greater than :value kilobytes.',
        'string' => 'O :attribute must be greater than :value characters.',
        'array' => 'O :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'O :attribute must be greater than or equal to :value.',
        'file' => 'O :attribute must be greater than or equal to :value kilobytes.',
        'string' => 'O :attribute must be greater than or equal to :value characters.',
        'array' => 'O :attribute must have :value items or more.',
    ],
    'image' => 'O :attribute must be an image.',
    'in' => 'O selected :attribute is invalid.',
    'in_array' => 'O :attribute field does not exist in :other.',
    'integer' => 'O :attribute must be an integer.',
    'ip' => 'O :attribute must be a valid IP address.',
    'ipv4' => 'O :attribute must be a valid IPv4 address.',
    'ipv6' => 'O :attribute must be a valid IPv6 address.',
    'json' => 'O :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'O :attribute must be less than :value.',
        'file' => 'O :attribute must be less than :value kilobytes.',
        'string' => 'O :attribute must be less than :value characters.',
        'array' => 'O :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'O :attribute must be less than or equal to :value.',
        'file' => 'O :attribute must be less than or equal to :value kilobytes.',
        'string' => 'O :attribute must be less than or equal to :value characters.',
        'array' => 'O :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'O :attribute must not be greater than :max.',
        'file' => 'O :attribute must not be greater than :max kilobytes.',
        'string' => 'O :attribute must not be greater than :max characters.',
        'array' => 'O :attribute must not have more than :max items.',
    ],
    'mimes' => 'O :attribute must be a file of type: :values.',
    'mimetypes' => 'O :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'O :attribute must be at least :min.',
        'file' => 'O :attribute must be at least :min kilobytes.',
        'string' => 'O :attribute must be at least :min characters.',
        'array' => 'O :attribute must have at least :min items.',
    ],
    'multiple_of' => 'O :attribute must be a multiple of :value.',
    'not_in' => 'O selected :attribute is invalid.',
    'not_regex' => 'O :attribute format is invalid.',
    'numeric' => 'O :attribute must be a number.',
    'password' => 'O password is incorrect.',
    'present' => 'O :attribute field must be present.',
    'prohibited' => 'O :attribute field is prohibited.',
    'prohibited_if' => 'O :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'O :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'O :attribute field prohibits :other from being present.',
    'regex' => 'O :attribute format is invalid.',
    'required' => 'O :attribute field is required.',
    'required_if' => 'O :attribute field is required when :other is :value.',
    'required_unless' => 'O :attribute field is required unless :other is in :values.',
    'required_with' => 'O :attribute field is required when :values is present.',
    'required_with_all' => 'O :attribute field is required when :values are present.',
    'required_without' => 'O :attribute field is required when :values is not present.',
    'required_without_all' => 'O :attribute field is required when none of :values are present.',
    'same' => 'O :attribute e :other must match.',
    'size' => [
        'numeric' => 'O :attribute must be :size.',
        'file' => 'O :attribute must be :size kilobytes.',
        'string' => 'O :attribute must be :size characters.',
        'array' => 'O :attribute must contain :size items.',
    ],
    'starts_with' => 'O :attribute must start with one of the following: :values.',
    'string' => 'O :attribute must be a string.',
    'timezone' => 'O :attribute must be a valid timezone.',
    'unique' => 'O :attribute has already been taken.',
    'uploaded' => 'O :attribute failed to upload.',
    'url' => 'O :attribute must be a valid URL.',
    'uuid' => 'O :attribute must be a valid UUID.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
