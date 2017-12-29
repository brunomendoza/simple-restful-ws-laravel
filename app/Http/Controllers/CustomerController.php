<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use \App\Customer;

class CustomerController extends Controller
{
    function index() {
      return Customer::all();
    }

    function show($id) {
      return Customer::find($id);
    }

    function store(Request $request) {
      return Customer::create($request->all());
    }

    function update(Request $request, $id) {
      $customer = Customer::findOrFail($id);
      $customer->update($request->all());
      return $customer;
    }

    function delete($id) {
      $customer = Customer::find($id);

      if (! is_null($customer)) {
        $customer->delete();

        return response('User deleted', 200)
          ->header("Content-Type", "text/plain");
      } else {
        return response('User not found', 404);
      }
    }
}
