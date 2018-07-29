<?php

namespace App\Http\Controllers;

use App\Product;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    protected $productrepository;

    /**
     * ProductsController constructor.
     */
    public function __construct(ProductRepository $productrepository)
    {
        $this->productrepository = $productrepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->productrepository->getAll();

        return view('products.index', compact('products'));
    }

    function getProducts()
    {

        $products = $this->productrepository->getAll();

        return response()->json([

            'fetched'=>true,
            'data'=> $products

        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        return view('products.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function store(Request $request)
    {

        $products = $this->productrepository->save($request);

        return 'Saved';

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->productrepository->getProductById($id);

        return view('products.show', compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = $this->productrepository->getProductById($id);

        return view('products.edit', compact('product'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        $product = $this->productrepository->getProductById($id);

        $product->update($request->all());

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = $this->productrepository->getProductById($id);

        $product ->delete();

        return redirect()->back()->with('success', 'Successfully Deleted');
    }
}
