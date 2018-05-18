<?php
use Migrations\AbstractSeed;

/**
 * Package seed.
 */
class PackageSeed extends AbstractSeed
{

    public function run()
    {
        $data = [
            [
                "name" => "Package 1",
                "description" => "Description 1"
            ],
            [
                "name" => "Package 2",
                "description" => "Description 2"
            ],
            [
                "name" => "Package 3",
                "description" => "Description 3"
            ],
            [
                "name" => "Package 4",
                "description" => "Description 4"
            ]
        ];

        $table = $this->table('package');
        $table->insert($data)->save();
    }
}
