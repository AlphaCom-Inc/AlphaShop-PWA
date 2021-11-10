<?php

namespace app\models\admin;

use app\models\AppModel;

class SettingsSMTP extends AppModel {

    public $attributes = [
        'smtp_host' => '',
        'smtp_port' => '',
        'smtp_protocol' => '',
        'smtp_login' => '',
        'smtp_password' => '',
    ];

    public $rules = [
        'required' => [
            ['smtp_host'],
            ['smtp_port'],
            ['smtp_protocol'],
            ['smtp_login'],
            ['smtp_password'],
        ],
        'integer' => [
            ['smtp_port'],
        ],
    ];

}