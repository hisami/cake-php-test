<?php
use Migrations\AbstractMigration;

class ChangeUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('users');
        $table->renameColumn('email','username');
        $table->addColumn('role', 'string', [
            'default' => '',
            'limit' => 255,
            'null' => false,
        ]);
        $table->update();
    }
}
