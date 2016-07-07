<?php
/**
 * Created by PhpStorm.
 * User: De Maeyer
 * Date: 20-03-16
 * Time: 15:56
 */

namespace App\Http\Controllers\Emails;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Mailen extends Controller
{
    public static function supportMail(Request $request){

        $emailcontent = array (
            'subject' => $request->get('type'),
            'emailmessage' => $request->get('message'),
            'departement'=> $request->get('departement'),
            'replyto' => $request->get('email'),
            'voornaam' => $request->get('voornaam'),
            'familienaam'=> $request->get('familienaam')
        );
        //dd($emailcontent);

        Mail::send('email.emailgen', $emailcontent, function($message){
            $message->to('studentenraad@ehb.be','Studentenraad')
                ->subject('Web Message');

        });
    }

}