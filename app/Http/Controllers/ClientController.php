<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \stdClass;
use App\Title as Title;

class ClientController extends Controller
{
    //
    public function __construct(Title $titles)
    {
        $this->titles = $titles->all();
    }

    public function di()
    {
        dd($this->titles);
    }

    public function index()
    {
        $clients = [];
         $obj = new \stdClass();

         $obj->id = 1;
         $obj->title = 'mr';
         $obj->name = 'john';
         $obj->last_name = 'doe';
         $obj->email = 'john@domain.com';
         $clients['clients'][] = $obj;

         $obj = new \stdClass();
         $obj->id = 2;
         $obj->title = 'ms';
         $obj->name = 'jane';
         $obj->last_name = 'doe';
         $obj->email = 'jane@another-domain.com';
         $clients['clients'][] = $obj;
        return view('client/index', $clients);
    }

    public function newClient()
    {
      $data = [];
      $data['titles'] = $this->titles;
      $data['modify'] = 0;
      return view('client/newClient', $data);
    }

    public function create()
    {
      return view('client/c');
    }

    public function show($client_id)
    {
      $data = [];
      $data['titles'] = $this->titles;
      $data['modify'] = 1;
      return view('client/newClient', $data);
    }

}
