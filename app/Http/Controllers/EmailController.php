<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail; //Importante incluir la clase Mail, ya que será la responsable de enviar el email.

class EmailController extends Controller{

    public function contact(Request $request){
    	$subject = "Asunto del correo";
    	$for = "Correo destinatario que recibirá el mensaje";
    	Mail::send('email', $request->all(), function($msg){
    		$msg->from("tucorreo@gmail.com","Nombre que aparecerá como emisor");
    		$smg->subject($subject);
    		$msg->to($for);
    	});
    	return redirect()->back();
    }
}//Cierre de la clase
