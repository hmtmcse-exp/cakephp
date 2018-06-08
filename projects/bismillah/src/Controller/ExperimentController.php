<?php
/**
 * Created by PhpStorm.
 * User: touhid
 * Date: 18-May-18
 * Time: 11:22 AM
 */

namespace App\Controller;


use Cake\ORM\TableRegistry;

class ExperimentController extends AppController
{

    public function index(){
        echo "<pre>";
        $countTableObject = TableRegistry::get("package")->find("all");
        $countTableObject->contain(['PackageFeature']);
        print_r($countTableObject->sql());
        print_r($countTableObject->toList());
        die();
    }
}