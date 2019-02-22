<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    protected $mytestModel;

    public function __construct(Request $request) {
      //parent::__construct($request);
      $this->mytestModel = new \App\Mytest();
    }

    public function index() {
      $data = $this->mytestModel->Call();

      return view('mytest.index')->with('data', $data);

    }
}
