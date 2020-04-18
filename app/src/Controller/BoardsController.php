<?php

namespace App\Controller;

class BoardsController extends AppController
{
    public function index()
    {
        $data = $this->Boards->find();

        if ($this->request->is('post')) {
            $input = $this->request->data['input'];
            $data = $this->Boards->find()->where(['name' => $input]);
        }

        $this->set('data', $data->toArray());
        $this->set('entity', $this->Boards->newEntity());
    }
}
