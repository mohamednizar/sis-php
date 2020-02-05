<?php

use Phinx\Migration\AbstractMigration;

class NewMigrationForEndOfStaffAssignment extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up()
    {
//        $this->execute("UPDATE `openemis`.`institution_staff` SET `end_date` = null WHERE 1");
        try{
            $staff = \Cake\ORM\TableRegistry::get('institution_staff');
            $rows = $staff->find('all');
            foreach ($rows as $row) {
                $staff->updateAll(['end_date' => null , 'end_year' => null , 'staff_status_id' => 1],['id'=>$row->id]);
            }
        }catch (\Exception $e){
            dd($e);
        }


    }

    public function down()
    {
        parent::down(); // TODO: Change the autogenerated stub
    }
}
