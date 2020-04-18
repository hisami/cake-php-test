<?php


use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
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
        $datetime = date('Y-m-d H:i:s');
        $data = [
            [
                'username' => 'hisamitsu',
                'password' => 'secret',
                'role' => 'admin',
                'created' => $datetime,
                'modified' => $datetime,
            ],
        ];
        $people = $this->table('users');
        $people->insert($data)->save();
    }
}
