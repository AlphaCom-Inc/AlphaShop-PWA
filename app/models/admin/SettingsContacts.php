<?php

namespace app\models\admin;

use app\models\AppModel;

class SettingsContacts extends AppModel {

    public $attributes = [
        'telephone' => '',
        'email' => '',
        'address' => '',
        'google_geo_code' => '',
    ];

    public $rules = [
        'required' => [
            ['telephone'],
            ['email'],
            ['address'],
            ['google_geo_code'],
        ],
    ];

}