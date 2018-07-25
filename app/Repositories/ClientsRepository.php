<?php namespace App\Repositories;

use App\Client;

class ClientsRepository
{

    /**
     * @param $id
     * @return mixed
     */
    public function getClientById($id)
    {
        return Client::findOrFail($id);
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return Client::orderBy('created_at', 'desc')->paginate(10)->all();

    }

    /**
     * @param $request
     * @return mixed
     */
    public function save($request)
    {

        return Client::create($request->all());

    }



}