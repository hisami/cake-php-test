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
        $data = [
            [
                'name' => 'hisamitsu',
                'password' => 'tanuki',
                'comment' => 'ryohei'
            ],
            [
                'name' => 'harada',
                'password' => 'rasuko',
                'comment' => 'kanako'
            ],
        ];
        $people = $this->table('people');
        $people->insert($data)->save();
    }
}
