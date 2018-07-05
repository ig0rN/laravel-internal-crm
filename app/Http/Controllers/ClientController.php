<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientCreateRequest;
use App\Http\Requests\ClientUpdateRequest;
use App\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::paginate(10);
        return view('client.list', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientCreateRequest $request)
    {
        if(isset($request)){
            Client::create($request->all());
            return redirect('/client-list')->with(['success' => 'You have successfully added new client.']);
        } else {
            return redirect('/client-list')->with(['error' => 'Something went wrong, please try again.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        $comments = $client->comment;


        return view('client.preview', compact('client', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientUpdateRequest $request, $id)
    {
        if(isset($request)){
            Client::findorfail($id)->update($request->all());
            return redirect('/client-list')->with(['success' => 'You have successfully updated a client.']);
        } else {
            return redirect('/client-list')->with(['error' => 'Something went wrong, please try again.']);
        }
    }

    /**
     * Show the form for deleting the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Client $client){

        return view('client.delete',compact('client'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(isset($_POST['yes'])){
            $client = Client::findOrFail($id);
            $client->delete();
            return redirect('/client-list')->with(['success' => 'You have successfully deleted a client.']);
        }

        if(isset($_POST['no'])){
            return redirect('/client-list')->with(['error' => 'You have canceled the deletion of this client.']);
        }

    }
}
