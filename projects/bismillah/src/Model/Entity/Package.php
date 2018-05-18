<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;


class Package extends Entity
{

    protected $_accessible = [
        'name' => true,
        'description' => true,
        'package_feature' => true
    ];
}
