<?php

namespace app\models\admin;

use app\models\AppModel;

class SettingsContacts extends AppModel {

    public $attributes = [
        'telephone' => '',
        'email' => '',
        'address' => '',
    ];

    public $rules = [
        'required' => [
            ['telephone'],
            ['email'],
            ['address'],
        ],
    ];

}