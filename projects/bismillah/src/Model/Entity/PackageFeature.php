<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;


class PackageFeature extends Entity
{

    protected $_accessible = [
        'package_id' => true,
        'feature_name' => true,
        'feature_description' => true,
        'package' => true
    ];
}
