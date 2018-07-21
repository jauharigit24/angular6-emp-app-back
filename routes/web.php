<?php
use Illuminate\Http\Request;
use App\Models\Country;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('/save-country', "CountryController@save");
$router->get('/get-countrylist', "CountryController@index");

// $router->get('/save-country', function ("UserController@show") use ($router) {
//     // $country= new App\Models\Country;
//     // $country->country_code=$request->get('country_code');
//     // $country->name=$request->get('name');
//     // $country->save();
//     return $router->app->version();
// });
