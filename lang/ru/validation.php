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

    'accepted' => 'Вы должны принять :attribute.',
    'accepted_if' => 'Вы должны принять :attribute, когда :other содержит :value.',
    'active_url' => 'Значение поля :attribute должно быть действительным URL адресом.',
    'after' => 'Значение поля :attribute должно быть датой после :date.',
    'after_or_equal' => 'Значение поля :attribute должно быть датой после или равной :date.',
    'alpha' => 'Значение поля :attribute может содержать только буквы.',
    'alpha_dash' => 'Значение поля :attribute может содержать только буквы, цифры, дефис и нижнее подчеркивание.',
    'alpha_num' => 'Значение поля :attribute может содержать только буквы и цифры.',
    'any_of' => 'Значение поля :attribute не найдено в списке разрешённых.',
    'array' => 'Значение поля :attribute должно быть массивом.',
    'ascii' => 'Значение поля :attribute должно содержать только однобайтовые цифро-буквенные символы.',
    'before' => 'Значение поля :attribute должно быть датой до :date.',
    'before_or_equal' => 'Значение поля :attribute должно быть датой до или равной :date.',
    'between' => [
        'array' => 'Количество элементов в поле :attribute должно быть от :min до :max.',
        'file' => 'Размер файла в поле :attribute должен быть от :min до :max Кб.',
        'numeric' => 'Значение поля :attribute должно быть от :min до :max.',
        'string' => 'Количество символов в поле :attribute должно быть от :min до :max.',
    ],
    'boolean' => 'Значение поля :attribute должно быть логического типа.',
    'can' => 'Значение поля :attribute должно быть авторизованным.',
    'confirmed' => 'Значение поля :attribute не совпадает с подтверждаемым.',
    'contains' => 'В поле :attribute отсутствует необходимое значение.',
    'current_password' => 'Неверный пароль.',
    'date' => 'Значение поля :attribute должно быть корректной датой.',
    'date_equals' => 'Значение поля :attribute должно быть датой равной :date.',
    'date_format' => 'Значение поля :attribute должно соответствовать формату даты: :format.',
    'decimal' => 'Значение поля :attribute должно содержать :decimal цифр десятичных разрядов.',
    'declined' => 'Значение поля :attribute должно быть отклонено.',
    'declined_if' => 'Значение поля :attribute должно быть отклонено, когда :other содержит :value.',
    'different' => 'Значения полей :attribute и :other должны различаться.',
    'digits' => 'Количество символов в поле :attribute должно быть равным :digits.',
    'digits_between' => 'Количество символов в поле :attribute должно быть от :min до :max.',
    'dimensions' => 'Поле :attribute имеет недопустимые размеры изображения.',
    'distinct' => 'Поле :attribute имеет дублирующееся значение.',
    'doesnt_contain' => 'Поле :attribute не должно содержать ни одно из следующих значений: :values.',
    'doesnt_end_with' => 'Поле :attribute не должно заканчиваться одним из следующих значений: :values.',
    'doesnt_start_with' => 'Поле :attribute не должно начинаться с одного из следующих значений: :values.',
    'email' => 'Значение поля :attribute должно быть действительным адресом электронной почты.',
    'ends_with' => 'Поле :attribute должно заканчиваться одним из следующих значений: :values.',
    'enum' => 'Выбранное значение для :attribute недопустимо.',
    'exists' => 'Выбранное значение для :attribute недопустимо.',
    'extensions' => 'Поле :attribute должно иметь одно из следующих расширений: :values.',
    'file' => 'Поле :attribute должно быть файлом.',
    'filled' => 'Поле :attribute должно иметь значение.',
    'gt' => [
        'array' => 'Количество элементов в поле :attribute должно быть больше :value.',
        'file' => 'Размер файла в поле :attribute должен быть больше :value Кб.',
        'numeric' => 'Значение поля :attribute должно быть больше :value.',
        'string' => 'Количество символов в поле :attribute должно быть больше :value.',
    ],
    'gte' => [
        'array' => 'Количество элементов в поле :attribute должно быть :value или больше.',
        'file' => 'Размер файла в поле :attribute должен быть больше или равен :value Кб.',
        'numeric' => 'Значение поля :attribute должно быть больше или равно :value.',
        'string' => 'Количество символов в поле :attribute должно быть больше или равно :value.',
    ],
    'hex_color' => 'Поле :attribute должно быть действительным шестнадцатеричным цветом.',
    'image' => 'Поле :attribute должно быть изображением.',
    'in' => 'Выбранное значение для :attribute недопустимо.',
    'in_array' => 'Поле :attribute должно существовать в :other.',
    'in_array_keys' => 'Поле :attribute должно содержать хотя бы один из следующих ключей: :values.',
    'integer' => 'Значение поля :attribute должно быть целым числом.',
    'ip' => 'Значение поля :attribute должно быть действительным IP адресом.',
    'ipv4' => 'Значение поля :attribute должно быть действительным IPv4 адресом.',
    'ipv6' => 'Значение поля :attribute должно быть действительным IPv6 адресом.',
    'json' => 'Значение поля :attribute должно быть действительной JSON строкой.',
    'list' => 'Поле :attribute должно быть списком.',
    'lowercase' => 'Поле :attribute должно быть в нижнем регистре.',
    'lt' => [
        'array' => 'Количество элементов в поле :attribute должно быть меньше :value.',
        'file' => 'Размер файла в поле :attribute должен быть меньше :value Кб.',
        'numeric' => 'Значение поля :attribute должно быть меньше :value.',
        'string' => 'Количество символов в поле :attribute должно быть меньше :value.',
    ],
    'lte' => [
        'array' => 'Количество элементов в поле :attribute не должно превышать :value.',
        'file' => 'Размер файла в поле :attribute должен быть меньше или равен :value Кб.',
        'numeric' => 'Значение поля :attribute должно быть меньше или равно :value.',
        'string' => 'Количество символов в поле :attribute должно быть меньше или равно :value.',
    ],
    'mac_address' => 'Значение поля :attribute должно быть действительным MAC адресом.',
    'max' => [
        'array' => 'Количество элементов в поле :attribute не должно превышать :max.',
        'file' => 'Размер файла в поле :attribute не должен превышать :max Кб.',
        'numeric' => 'Значение поля :attribute не должно превышать :max.',
        'string' => 'Количество символов в поле :attribute не должно превышать :max.',
    ],
    'max_digits' => 'Поле :attribute не должно содержать более :max цифр.',
    'mimes' => 'Поле :attribute должно быть файлом одного из следующих типов: :values.',
    'mimetypes' => 'Поле :attribute должно быть файлом одного из следующих типов: :values.',
    'min' => [
        'array' => 'Количество элементов в поле :attribute должно быть не менее :min.',
        'file' => 'Размер файла в поле :attribute должен быть не менее :min Кб.',
        'numeric' => 'Значение поля :attribute должно быть не менее :min.',
        'string' => 'Количество символов в поле :attribute должно быть не менее :min.',
    ],
    'min_digits' => 'Поле :attribute должно содержать не менее :min цифр.',
    'missing' => 'Поле :attribute должно отсутствовать.',
    'missing_if' => 'Поле :attribute должно отсутствовать, когда :other равно :value.',
    'missing_unless' => 'Поле :attribute должно отсутствовать, если только :other не находится в :values.',
    'missing_with' => 'Поле :attribute должно отсутствовать, когда присутствует :values.',
    'missing_with_all' => 'Поле :attribute должно отсутствовать, когда присутствуют :values.',
    'multiple_of' => 'Значение поля :attribute должно быть кратно :value.',
    'not_in' => 'Выбранное значение для :attribute недопустимо.',
    'not_regex' => 'Формат поля :attribute недопустим.',
    'numeric' => 'Значение поля :attribute должно быть числом.',
    'password' => [
        'letters' => 'Поле :attribute должно содержать хотя бы одну букву.',
        'mixed' => 'Поле :attribute должно содержать хотя бы одну заглавную и одну строчную букву.',
        'numbers' => 'Поле :attribute должно содержать хотя бы одну цифру.',
        'symbols' => 'Поле :attribute должно содержать хотя бы один символ.',
        'uncompromised' => 'Указанное значение для :attribute было найдено в утечке данных. Пожалуйста, выберите другое значение.',
    ],
    'present' => 'Поле :attribute должно быть присутствующим.',
    'present_if' => 'Поле :attribute должно быть присутствующим, когда :other равно :value.',
    'present_unless' => 'Поле :attribute должно быть присутствующим, если только :other не находится в :value.',
    'present_with' => 'Поле :attribute должно быть присутствующим, когда присутствует :values.',
    'present_with_all' => 'Поле :attribute должно быть присутствующим, когда присутствуют :values.',
    'prohibited' => 'Поле :attribute запрещено.',
    'prohibited_if' => 'Поле :attribute запрещено, когда :other равно :value.',
    'prohibited_if_accepted' => 'Поле :attribute запрещено, когда :other принято.',
    'prohibited_if_declined' => 'Поле :attribute запрещено, когда :other отклонено.',
    'prohibited_unless' => 'Поле :attribute запрещено, если только :other не находится в :values.',
    'prohibits' => 'Поле :attribute запрещает присутствие :other.',
    'regex' => 'Формат поля :attribute недопустим.',
    'required' => 'Поле :attribute обязательно для заполнения.',
    'required_array_keys' => 'Поле :attribute должно содержать записи для: :values.',
    'required_if' => 'Поле :attribute обязательно, когда :other равно :value.',
    'required_if_accepted' => 'Поле :attribute обязательно, когда :other принято.',
    'required_if_declined' => 'Поле :attribute обязательно, когда :other отклонено.',
    'required_unless' => 'Поле :attribute обязательно, если только :other не находится в :values.',
    'required_with' => 'Поле :attribute обязательно, когда присутствует :values.',
    'required_with_all' => 'Поле :attribute обязательно, когда присутствуют :values.',
    'required_without' => 'Поле :attribute обязательно, когда отсутствует :values.',
    'required_without_all' => 'Поле :attribute обязательно, когда ни одно из :values не присутствует.',
    'same' => 'Значение поля :attribute должно совпадать со значением :other.',
    'size' => [
        'array' => 'Количество элементов в поле :attribute должно быть равным :size.',
        'file' => 'Размер файла в поле :attribute должен быть равным :size Кб.',
        'numeric' => 'Значение поля :attribute должно быть равным :size.',
        'string' => 'Количество символов в поле :attribute должно быть равным :size.',
    ],
    'starts_with' => 'Поле :attribute должно начинаться с одного из следующих значений: :values.',
    'string' => 'Значение поля :attribute должно быть строкой.',
    'timezone' => 'Значение поля :attribute должно быть действительной временной зоной.',
    'unique' => 'Такое значение поля :attribute уже существует.',
    'uploaded' => 'Не удалось загрузить :attribute.',
    'uppercase' => 'Поле :attribute должно быть заглавным.',
    'url' => 'Значение поля :attribute должно быть действительным URL адресом.',
    'ulid' => 'Поле :attribute должно быть действительным ULID.',
    'uuid' => 'Поле :attribute должно быть действительным UUID.',

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
