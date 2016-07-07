<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 20-03-16
 * Time: 15:51
 */

namespace App\Http\Controllers\Validation;


use App\Http\Controllers\Controller;
use App\Http\Controllers\Emails\Mailen;
use Illuminate\Http\Request;

class ContactForm extends Controller
{
    public function contactPage(Request $request){
        $rules = array(
            'voornaam' => 'required',
            'familienaam' => 'required',
            'email' => 'required|email',
            'departement' => 'required',
            'type' => 'required',
            'message' => 'required'
        );

        $data = \Illuminate\Support\Facades\Validator::make($request->all(), $rules);

        //dd($data);

        if($data->fails()) {
           // dd($data->fails());
            return Redirect::to('contact')->withErrors($data)->withInput();
        }

        Mailen::supportMail($request);

        return view('contact');
    }
}