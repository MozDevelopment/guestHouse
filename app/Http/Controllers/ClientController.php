<?php

namespace App\Http\Controllers;

use App\Client as Client;
use App\Title as Title;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function __construct(Title $titles, Client $client)
    {
        $this->titles = $titles->all();
        $this->client = $client;
    }

    public function di()
    {
        dd($this->titles);
    }

    public function index()
    {
         $data = [];
         $data['clients'] = $this->client->all();
        return view('client/index', $data);
    }

    public function newClient(Request $request, Client $client)
    {

      $data = [];
      $data['title'] = $request->input('title');
      $data['name'] = $request->input('name');
      $data['last_name'] = $request->input('last_name');
      $data['address'] = $request->input('address');
      $data['zip_code'] = $request->input('zip_code');
      $data['city'] = $request->input('city');
      $data['state'] =$request->input('state');
      $data['email'] = $request->input('email');

      if($request->isMethod('post'))
      {
        // dd($data);
        $this->validate(
            $request,
            [
              'name'=>'required|min:4',
              'last_name'=>'required',
              'address'=>'required',
              'zip_code'=>'required',
              'city'=>'required',
              'state'=>'required',
              'email'=>'required'
            ]
          );
          $client->insert($data);
          return redirect('clients');
      }

      $data['titles'] = $this->titles;
      $data['modify'] = 0;
      return view('client/form', $data);
    }

    public function create()
    {
      return view('client/ ');
    }

    public function show($client_id)
    {
      $data = [];
      $data['titles'] = $this->titles;
      $data['modify'] = 1;
      $data['client_id'] = $client_id;

      $client_data = $this->client->find($client_id);
      $data['title'] = $client_data->title;
      $data['name'] = $client_data->name;
      $data['last_name'] = $client_data->last_name;
      $data['address'] = $client_data->address;
      $data['zip_code'] = $client_data->zip_code;
      $data['city'] = $client_data->city;
      $data['state'] = $client_data->state;
      $data['email'] = $client_data->email;

      return view('client/form', $data);
    }

    public function modify(Request $request, $client_id, Client $client )
    {
      $data = [];
      $data['title'] = $request->input('title');
      $data['title'] = $request->input('title');
      $data['name'] = $request->input('name');
      $data['last_name'] = $request->input('last_name');
      $data['address'] = $request->input('address');
      $data['zip_code'] = $request->input('zip_code');
      $data['city'] = $request->input('city');
      $data['state'] =$request->input('state');
      $data['email'] = $request->input('email');

      if($request->isMethod('post')) {
        $this->validate(
            $request,
            [
              'name'=>'required|min:4',
              'last_name'=>'required',
              'address'=>'required',
              'zip_code'=>'required',
              'city'=>'required',
              'state'=>'required',
              'email'=>'required'
            ]);
            
            $client_data = $this->client->find($client_id);

            $client_data->title = $request->input('title');
            $client_data->name = $request->input('name');
            $client_data->last_name = $request->input('last_name');
            $client_data->address = $request->input('address');
            $client_data->zip_code = $request->input('zip_code');
            $client_data->city = $request->input('city');
            $client_data->state =$request->input('state');
            $client_data->email = $request->input('email');

          $client_data->save();
          return redirect('clients');
      }
      return view('client/form', $data);
    }

}
