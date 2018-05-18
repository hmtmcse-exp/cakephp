<?php
use Migrations\AbstractSeed;

/**
 * PackageFeature seed.
 */
class PackageFeatureSeed extends AbstractSeed
{

    public function run()
    {
        $data = [
            [
                'package_id' => 1,
                'feature_name' => "Feature Name 1",
                'feature_description' => "Feature Description 1",
            ],
            [
                'package_id' => 2,
                'feature_name' => "Feature Name 2",
                'feature_description' => "Feature Description 2",
            ],
            [
                'package_id' => 3,
                'feature_name' => "Feature Name 3",
                'feature_description' => "Feature Description 3",
            ],
            [
                'package_id' => 4,
                'feature_name' => "Feature Name 4",
                'feature_description' => "Feature Description 4",
            ]
        ];

        $table = $this->table('package_feature');
        $table->insert($data)->save();
    }
}
