<?php
use Migrations\AbstractMigration;

class PackageFeature extends AbstractMigration
{

    public function change()
    {
        $studentsCoursesTable = $this->table('package_feature');
        $studentsCoursesTable
            ->addColumn('package_id', 'integer')
            ->addForeignKey('package_id', 'package', 'id', array('delete'=>'CASCADE', 'update'=>'CASCADE'))
            ->addColumn('feature_name', 'string', ['limit' => 500])
            ->addColumn('feature_description', 'string', ['limit' => 500])
            ->create();
    }

}
