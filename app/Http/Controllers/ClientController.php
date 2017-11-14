<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \stdClass;

class ClientController extends Controller
{
    //
    public function __construct()
    {

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
      return view('client/newClient');
    }

    public function create()
    {
      return view('client/c');
    }

    public function show($client_id)
    {
      return view('client/show');
    }

}
