<?php

use Migrations\AbstractMigration;

class ChangeBoards extends AbstractMigration
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
        $table = $this->table('boards');
        $table->removeColumn('name');
        $table->addColumn('person_id', 'integer')
            ->addForeignKey('person_id', 'people', 'id');
        $table->update();
    }
}
