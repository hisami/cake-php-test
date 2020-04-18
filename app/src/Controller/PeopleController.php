<?php

namespace App\Controller;

class PeopleController extends AppController
{
    public function isAuthorized($user = null)
    {
        if ($user['role'] === 'admin') {
            return true;
        }
        return false;
    }

    public function index($id = null)
    {
        $data = $this->People->find('all')->contain(['Boards']);
        $this->set('data', $data);
    }
}
