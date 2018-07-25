<?php

namespace App\Http\Controllers;

use App\Repositories\ClientsRepository;
use Illuminate\Http\Request;

class ClientsController extends Controller
{

    protected $clientsrepository;

    /**
     * ClientsController constructor.
     * @param $clientsrepository
     */
    public function __construct(ClientsRepository $clientsrepository)
    {

        $this->clientsrepository = $clientsrepository;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $clients = $this->clientsrepository->getAll();

        return view('clients.index', compact('clients'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('clients.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->clientsrepository->save($request);

        return redirect()->route('clients.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clients = $this->clientsrepository->getClientById($id);

        return view('clients.show')->with('clients', $clients);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clients = $this->clientsrepository->getClientById($id);

        return view('clients.edit', compact('clients'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $clients = $this->clientsrepository->getClientById($id);

       $clients->update($request->all());

       return redirect()->route('clients.show', ["id" => $clients->id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clients = $this->clientsrepository->getClientById($id);

        $clients->delete();

        return redirect('/clients')->with('success', 'Post Removed ');
    }
}
