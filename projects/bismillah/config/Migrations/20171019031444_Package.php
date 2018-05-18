<?php


use App\AppService\AppConstant;
use Migrations\AbstractMigration;

class Package extends AbstractMigration
{

    public function change()
    {
        $studentsTable = $this->table('package');
        $studentsTable
            ->addColumn('name', 'string', ['limit' => 500])
            ->addColumn('description', 'text',['null' => true] )
            ->create();
    }
}
