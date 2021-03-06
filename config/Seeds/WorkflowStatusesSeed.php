<?php
use Migrations\AbstractSeed;

/**
 * WorkflowStatuses seed.
 */
class WorkflowStatusesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'code' => 'COMPLETED',
                'name' => 'Completed',
                'is_editable' => '0',
                'is_removable' => '0',
                'workflow_model_id' => '2',
                'modified_user_id' => NULL,
                'modified' => NULL,
                'created_user_id' => '1',
                'created' => '2015-11-05 16:49:51',
            ],
            [
                'id' => '2',
                'code' => 'NOT_COMPLETED',
                'name' => 'Not Completed',
                'is_editable' => '0',
                'is_removable' => '0',
                'workflow_model_id' => '2',
                'modified_user_id' => NULL,
                'modified' => NULL,
                'created_user_id' => '1',
                'created' => '2015-11-05 16:49:51',
            ],
            [
                'id' => '3',
                'code' => 'PENDING',
                'name' => 'Pending',
                'is_editable' => '0',
                'is_removable' => '0',
                'workflow_model_id' => '3',
                'modified_user_id' => NULL,
                'modified' => NULL,
                'created_user_id' => '1',
                'created' => '2015-11-06 11:27:06',
            ],
            [
                'id' => '4',
                'code' => 'APPROVED',
                'name' => 'Approved',
                'is_editable' => '0',
                'is_removable' => '0',
                'workflow_model_id' => '3',
                'modified_user_id' => NULL,
                'modified' => NULL,
                'created_user_id' => '1',
                'created' => '2015-11-06 11:27:06',
            ],
            [
                'id' => '5',
                'code' => 'PENDING',
                'name' => 'Pending',
                'is_editable' => '0',
                'is_removable' => '0',
                'workflow_model_id' => '4',
                'modified_user_id' => NULL,
                'modified' => NULL,
                'created_user_id' => '1',
                'created' => '2015-11-06 11:27:06',
            ],
            [
                'id' => '6',
                'code' => 'APPROVED',
                'name' => 'Approved',
                'is_editable' => '0',
                'is_removable' => '0',
                'workflow_model_id' => '4',
                'modified_user_id' => NULL,
                'modified' => NULL,
                'created_user_id' => '1',
                'created' => '2015-11-06 11:27:06',
            ],
            [
                'id' => '7',
                'code' => 'PENDING',
                'name' => 'Pending',
                'is_editable' => '0',
                'is_removable' => '0',
                'workflow_model_id' => '5',
                'modified_user_id' => NULL,
                'modified' => NULL,
                'created_user_id' => '1',
                'created' => '2015-11-06 11:27:06',
            ],
            [
                'id' => '8',
                'code' => 'APPROVED',
                'name' => 'Approved',
                'is_editable' => '0',
                'is_removable' => '0',
                'workflow_model_id' => '5',
                'modified_user_id' => NULL,
                'modified' => NULL,
                'created_user_id' => '1',
                'created' => '2015-11-06 11:27:06',
            ],
            [
                'id' => '9',
                'code' => 'PENDING',
                'name' => 'Pending',
                'is_editable' => '0',
                'is_removable' => '0',
                'workflow_model_id' => '6',
                'modified_user_id' => NULL,
                'modified' => NULL,
                'created_user_id' => '1',
                'created' => '2015-12-15 15:41:56',
            ],
            [
                'id' => '10',
                'code' => 'APPROVED',
                'name' => 'Approved',
                'is_editable' => '0',
                'is_removable' => '0',
                'workflow_model_id' => '6',
                'modified_user_id' => NULL,
                'modified' => NULL,
                'created_user_id' => '1',
                'created' => '2015-12-15 15:41:56',
            ],
            [
                'id' => '11',
                'code' => 'ACTIVE',
                'name' => 'Active',
                'is_editable' => '0',
                'is_removable' => '0',
                'workflow_model_id' => '7',
                'modified_user_id' => NULL,
                'modified' => NULL,
                'created_user_id' => '1',
                'created' => '2016-02-12 18:29:36',
            ],
            [
                'id' => '12',
                'code' => 'INACTIVE',
                'name' => 'Inactive',
                'is_editable' => '0',
                'is_removable' => '0',
                'workflow_model_id' => '7',
                'modified_user_id' => NULL,
                'modified' => NULL,
                'created_user_id' => '1',
                'created' => '2016-02-12 18:29:36',
            ],
            [
                'id' => '13',
                'code' => 'PENDING',
                'name' => 'Pending',
                'is_editable' => '0',
                'is_removable' => '0',
                'workflow_model_id' => '8',
                'modified_user_id' => NULL,
                'modified' => NULL,
                'created_user_id' => '1',
                'created' => '2016-04-15 10:45:45',
            ],
            [
                'id' => '14',
                'code' => 'CLOSED',
                'name' => 'Closed',
                'is_editable' => '0',
                'is_removable' => '0',
                'workflow_model_id' => '8',
                'modified_user_id' => NULL,
                'modified' => NULL,
                'created_user_id' => '1',
                'created' => '2016-04-15 10:45:45',
            ],
            [
                'id' => '15',
                'code' => 'APPROVED',
                'name' => 'Approved',
                'is_editable' => '0',
                'is_removable' => '0',
                'workflow_model_id' => '8',
                'modified_user_id' => NULL,
                'modified' => NULL,
                'created_user_id' => '1',
                'created' => '2016-04-15 10:45:45',
            ],
            [
                'id' => '16',
                'code' => 'PENDINGREVIEW',
                'name' => 'Pending Review',
                'is_editable' => '0',
                'is_removable' => '0',
                'workflow_model_id' => '10',
                'modified_user_id' => NULL,
                'modified' => NULL,
                'created_user_id' => '1',
                'created' => '2016-11-08 07:25:04',
            ],
            [
                'id' => '17',
                'code' => 'PENDINGAPPROVAL',
                'name' => 'Pending Approval',
                'is_editable' => '0',
                'is_removable' => '0',
                'workflow_model_id' => '10',
                'modified_user_id' => NULL,
                'modified' => NULL,
                'created_user_id' => '1',
                'created' => '2016-11-08 07:25:04',
            ],
            [
                'id' => '18',
                'code' => 'APPROVED',
                'name' => 'Approved',
                'is_editable' => '0',
                'is_removable' => '0',
                'workflow_model_id' => '10',
                'modified_user_id' => NULL,
                'modified' => NULL,
                'created_user_id' => '1',
                'created' => '2016-11-08 07:25:04',
            ],
            [
                'id' => '19',
                'code' => 'REJECTED',
                'name' => 'Rejected',
                'is_editable' => '0',
                'is_removable' => '0',
                'workflow_model_id' => '10',
                'modified_user_id' => NULL,
                'modified' => NULL,
                'created_user_id' => '1',
                'created' => '2016-11-08 07:25:04',
            ],
        ];

        $table = $this->table('workflow_statuses');
        $table->insert($data)->save();
    }
}
