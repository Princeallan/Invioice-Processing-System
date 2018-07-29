<?php namespace App\Repositories;

use App\Product;

class ProductRepository
{

    /**
     * @param $id
     * @return mixed
     */
    public function getProductById($id)
    {

        return Product::findOrFail($id);

    }

    /**
     * @return mixed
     */
    public function getAll()
    {

        return Product::orderBy('created_at', 'desc')->paginate(10)->all();

    }

    /**
     * @param $request
     * @return mixed
     */
    public function save($request)
    {

        return Product::create($request->all());

    }



}