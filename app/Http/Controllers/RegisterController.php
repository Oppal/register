<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;
class RegisterController extends Controller
{
    public function addRegister(Request $request){

$register = new Register;
$register->fullname = $request->Input('fullname');
$register->age = $request->Input('age');
$register->save();
$response = array('response'=>'registered succesfully!', 'success'=>true);
return $response;


    }


}
