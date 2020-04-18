<?php


use Phinx\Seed\AbstractSeed;

class BoardSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'title' => 'やること',
                'content' => 'PHPの勉強',
                'person_id' => 1
            ],
            [
                'title' => 'やってること',
                'content' => 'Golangの勉強',
                'person_id' => 2
            ],
        ];
        $boards = $this->table('boards');
        $boards->insert($data)->save();
    }
}
