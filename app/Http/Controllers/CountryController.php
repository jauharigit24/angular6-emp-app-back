<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Country as Country;

class CountryController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
        $flights = Country::all();

        return $flights;
    }
    /**
     *  @param  \Illuminate\Http\Request  $request
     *  
     */
    public function save(Request $request){
        $this->validateInput($request);
        Country::create([
            'name' => $request['name'],
            'country_code' => $request['country_code']
        ]);
        
    }

    private function validateInput($request) {
        $this->validate($request, [
            'name' => 'required|max:60|unique:country',
            'country_code' => 'required|max:3|unique:country'
        ]);
    }
}
