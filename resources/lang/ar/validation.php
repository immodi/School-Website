<?php

return [

    /*
    |--------------------------------------------------------------------------
    | رسائل التحقق
    |--------------------------------------------------------------------------
    |
    | تحتوي السطور التالية على الرسائل الافتراضية المستخدمة بواسطة
    | كلاس التحقق. بعض هذه القواعد لها إصدارات متعددة مثل قواعد الحجم.
    | لا تتردد في تعديل أي من هذه الرسائل حسب الحاجة.
    |
    */

    'accepted' => 'يجب قبول :attribute.',
    'active_url' => ':attribute ليس عنوان URL صالح.',
    'after' => 'يجب أن يكون :attribute تاريخاً بعد :date.',
    'after_or_equal' => 'يجب أن يكون :attribute تاريخاً بعد أو يساوي :date.',
    'alpha' => 'قد يحتوي :attribute على أحرف فقط.',
    'alpha_dash' => 'قد يحتوي :attribute على أحرف، أرقام، شرطات وشرطات سفلية فقط.',
    'alpha_num' => 'قد يحتوي :attribute على أحرف وأرقام فقط.',
    'array' => 'يجب أن يكون :attribute مصفوفة.',
    'before' => 'يجب أن يكون :attribute تاريخاً قبل :date.',
    'before_or_equal' => 'يجب أن يكون :attribute تاريخاً قبل أو يساوي :date.',
    'between' => [
        'numeric' => 'يجب أن يكون :attribute بين :min و :max.',
        'file' => 'يجب أن يكون :attribute بين :min و :max كيلوبايت.',
        'string' => 'يجب أن يكون :attribute بين :min و :max حرفاً.',
        'array' => 'يجب أن يحتوي :attribute على :min إلى :max عناصر.',
    ],
    'boolean' => 'يجب أن يكون حقل :attribute صح أو خطأ.',
    'confirmed' => 'تأكيد :attribute لا يتطابق.',
    'date' => ':attribute ليس تاريخاً صالحاً.',
    'date_format' => ':attribute لا يطابق الشكل :format.',
    'different' => 'يجب أن يكون :attribute و :other مختلفين.',
    'digits' => 'يجب أن يحتوي :attribute على :digits رقم.',
    'digits_between' => 'يجب أن يكون :attribute بين :min و :max رقم.',
    'dimensions' => ':attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct' => 'حقل :attribute يحتوي على قيمة مكررة.',
    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صالح.',
    'exists' => ':attribute المحدد غير صالح.',
    'file' => 'يجب أن يكون :attribute ملفاً.',
    'filled' => 'حقل :attribute يجب أن يحتوي على قيمة.',
    'gt' => [
        'numeric' => 'يجب أن يكون :attribute أكبر من :value.',
        'file' => 'يجب أن يكون :attribute أكبر من :value كيلوبايت.',
        'string' => 'يجب أن يكون :attribute أكبر من :value حرفاً.',
        'array' => 'يجب أن يحتوي :attribute على أكثر من :value عنصر.',
    ],
    'gte' => [
        'numeric' => 'يجب أن يكون :attribute أكبر من أو يساوي :value.',
        'file' => 'يجب أن يكون :attribute أكبر من أو يساوي :value كيلوبايت.',
        'string' => 'يجب أن يكون :attribute أكبر من أو يساوي :value حرفاً.',
        'array' => 'يجب أن يحتوي :attribute على :value عناصر أو أكثر.',
    ],
    'image' => 'يجب أن يكون :attribute صورة.',
    'in' => ':attribute المحدد غير صالح.',
    'in_array' => 'حقل :attribute غير موجود في :other.',
    'integer' => 'يجب أن يكون :attribute عدداً صحيحاً.',
    'ip' => 'يجب أن يكون :attribute عنوان IP صالح.',
    'ipv4' => 'يجب أن يكون :attribute عنوان IPv4 صالح.',
    'ipv6' => 'يجب أن يكون :attribute عنوان IPv6 صالح.',
    'json' => 'يجب أن يكون :attribute سلسلة JSON صالحة.',
    'lt' => [
        'numeric' => 'يجب أن يكون :attribute أقل من :value.',
        'file' => 'يجب أن يكون :attribute أقل من :value كيلوبايت.',
        'string' => 'يجب أن يكون :attribute أقل من :value حرفاً.',
        'array' => 'يجب أن يحتوي :attribute على أقل من :value عنصر.',
    ],
    'lte' => [
        'numeric' => 'يجب أن يكون :attribute أقل من أو يساوي :value.',
        'file' => 'يجب أن يكون :attribute أقل من أو يساوي :value كيلوبايت.',
        'string' => 'يجب أن يكون :attribute أقل من أو يساوي :value حرفاً.',
        'array' => 'يجب ألا يحتوي :attribute على أكثر من :value عناصر.',
    ],
    'max' => [
        'numeric' => 'قد لا يكون :attribute أكبر من :max.',
        'file' => 'قد لا يكون :attribute أكبر من :max كيلوبايت.',
        'string' => 'قد لا يكون :attribute أكبر من :max حرفاً.',
        'array' => 'قد لا يحتوي :attribute على أكثر من :max عناصر.',
    ],
    'mimes' => 'يجب أن يكون :attribute ملفاً من النوع: :values.',
    'mimetypes' => 'يجب أن يكون :attribute ملفاً من النوع: :values.',
    'min' => [
        'numeric' => 'يجب أن يكون :attribute على الأقل :min.',
        'file' => 'يجب أن يكون :attribute على الأقل :min كيلوبايت.',
        'string' => 'يجب أن يحتوي :attribute على الأقل :min حرفاً.',
        'array' => 'يجب أن يحتوي :attribute على الأقل :min عناصر.',
    ],
    'not_in' => ':attribute المحدد غير صالح.',
    'not_regex' => 'صيغة :attribute غير صالحة.',
    'numeric' => 'يجب أن يكون :attribute رقماً.',
    'present' => 'يجب أن يكون حقل :attribute موجوداً.',
    'regex' => 'صيغة :attribute غير صالحة.',
    'required' => 'حقل :attribute مطلوب.',
    'required_if' => 'حقل :attribute مطلوب عندما :other يكون :value.',
    'required_unless' => 'حقل :attribute مطلوب ما لم يكن :other في :values.',
    'required_with' => 'حقل :attribute مطلوب عندما :values موجود.',
    'required_with_all' => 'حقل :attribute مطلوب عندما :values موجود.',
    'required_without' => 'حقل :attribute مطلوب عندما :values غير موجود.',
    'required_without_all' => 'حقل :attribute مطلوب عندما لا يكون أي من :values موجود.',
    'same' => 'يجب أن يتطابق :attribute و :other.',
    'size' => [
        'numeric' => 'يجب أن يكون :attribute :size.',
        'file' => 'يجب أن يكون :attribute :size كيلوبايت.',
        'string' => 'يجب أن يحتوي :attribute على :size حرفاً.',
        'array' => 'يجب أن يحتوي :attribute على :size عناصر.',
    ],
    'string' => 'يجب أن يكون :attribute نصاً.',
    'timezone' => 'يجب أن يكون :attribute نطاقاً صالحاً.',
    'unique' => 'تم أخذ :attribute بالفعل.',
    'uploaded' => 'فشل في تحميل :attribute.',
    'url' => 'صيغة :attribute غير صالحة.',

    /*
    |--------------------------------------------------------------------------
    | رسائل التحقق المخصصة
    |--------------------------------------------------------------------------
    |
    | هنا يمكنك تحديد رسائل التحقق المخصصة للقواعد باستخدام
    | الأسلوب "attribute.rule" لتسمية السطور. يسهل هذا
    | تحديد رسالة تحقق مخصصة لقواعد معينة.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'رسالة-مخصصة',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | استبدال الخصائص المخصصة
    |--------------------------------------------------------------------------
    |
    | السطور التالية تستخدم لاستبدال خصائص مكان الحقول بشيء
    | أكثر قابلية للقراءة مثل عنوان البريد الإلكتروني بدلاً من "email".
    | يساعد هذا في جعل الرسائل أكثر وضوحاً.
    |
    */

    'attributes' => [],

];
