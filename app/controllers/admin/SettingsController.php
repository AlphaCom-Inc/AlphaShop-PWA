<?php

namespace app\controllers\admin;

use alphashop\App;
use app\models\admin\Product;
use app\models\admin\SettingsContacts;
use app\models\admin\SettingsGeneral;
use app\models\admin\SettingsSMTP;
use app\models\admin\SettingsSocials;
use app\models\AppModel;

class SettingsController extends AppController {

    public function indexAction() {
        $this->setMeta('Настройки');
    }

    public function errorsAction() {
        if (!empty($_GET['clear'])) {
            unlink(ROOT . '/tmp/errors.log');
            $_SESSION['success'] = 'Фойл очишен';
            redirect();
        }
        $this->setMeta('Ошибки сайта');
    }

    public function logoAction(){
        if(isset($_GET['upload'])){
            $wmax = 512;
            $hmax = 512;
            $name = $_POST['name'];
            $product = new SettingsGeneral();
            $product->uploadLogo($name, $wmax, $hmax);
        }
    }

    public function faviconAction(){
        if(isset($_GET['upload'])){
            $wmax = 512;
            $hmax = 512;
            $name = $_POST['name'];
            $product = new SettingsGeneral();
            $product->uploadImg($name, $wmax, $hmax);
        }
    }

    public function generalAction() {
        if(!empty($_POST)){
            $sGeneral = new SettingsGeneral();
            $data = $_POST;
            $sGeneral->load($data);
            $sGeneral->getImg();

            if(!$sGeneral->validate($data)){
                $sGeneral->getErrors();
                $_SESSION['form_data'] = $data;
                redirect();
            }

            if(!empty($sGeneral)) {
                foreach ($sGeneral->attributes as $k => $v) {
                    $r = \R::findOne('as_params', "akey = '{$k}'");
                    if ($k != $r->avalue) {
                        $r->avalue = $v;
                        \R::store($r);
                    }
                }
                $_SESSION['success'] = 'Изменения сохранены';
            }

            redirect();
        }
    }

    public function smtpAction() {
        if(!empty($_POST)){
            $sSMTP = new SettingsSMTP();
            $data = $_POST;
            $sSMTP->load($data);

            if(!$sSMTP->validate($data)){
                $sSMTP->getErrors();
                $_SESSION['form_data'] = $data;
                redirect();
            }

            if(!empty($sSMTP)) {
                foreach ($sSMTP->attributes as $k => $v) {
                    $r = \R::findOne('as_params', "akey = '{$k}'");
                    if ($k != $r->avalue) {
                        $r->avalue = $v;
                        \R::store($r);
                    }

                }
            $_SESSION['success'] = 'Изменения сохранены';
            }
            redirect();
        }
    }

    public function contactsAction() {
        if(!empty($_POST)){
            $sContacts = new SettingsContacts();
            $data = $_POST;
            $sContacts->load($data);

            if(!$sContacts->validate($data)){
                $sContacts->getErrors();
                $_SESSION['form_data'] = $data;
                redirect();
            }

            if(!empty($sContacts)) {
                foreach ($sContacts->attributes as $k => $v) {
                    $r = \R::findOne('as_params', "akey = '{$k}'");
                    if ($k != $r->avalue) {
                        $r->avalue = $v;
                        \R::store($r);
                    }

                }
            $_SESSION['success'] = 'Изменения сохранены';
            }
            redirect();
        }
    }

    public function socialsAction() {
        if(!empty($_POST)){
            $sContacts = new SettingsSocials();
            $data = $_POST;
            $sContacts->load($data);

            if(!$sContacts->validate($data)){
                $sContacts->getErrors();
                $_SESSION['form_data'] = $data;
                redirect();
            }

            if(!empty($sContacts)) {
                foreach ($sContacts->attributes as $k => $v) {
                    $r = \R::findOne('as_social', "stype = '{$k}'");
                    if ($k != $r->svalue) {
                        $r->svalue = $v;
                        \R::store($r);
                    }

                }
            $_SESSION['success'] = 'Изменения сохранены';
            }
            redirect();
        }
    }

}