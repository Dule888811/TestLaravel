<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AdsController extends Controller

{
    public function store(Request $request)
    {
        $this->validate($request, [
          //  'hospital_name' => 'required',
            'image' => 'max:5000000|mimes:jpeg,png,jpg|dimensions:min_width=100,min_height=100,max_width=1050,max_height=1000'
        ]);
       // $this->_hospitalRepositories->store($request);
       // dd($request);
        return redirect()->route('home');
    }
}
