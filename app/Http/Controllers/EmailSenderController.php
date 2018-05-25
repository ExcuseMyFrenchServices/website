<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class EmailSenderController extends Controller
{
    public function quote(Request $request)
    {
    	$name 		= 	$request->input('name');
    	$tel 		= 	$request->input('tel');
    	$email 		= 	$request->input('email');
    	$date 		= 	$request->input('date');
    	$location 	= 	$request->input('location');
    	$service 	= 	str_replace('-',' ',$request->input('service'));

    	Mail::send('email.notify', ['name'=>$name,'tel'=>$tel,'email'=>$email,'date'=>$date,'location'=>$location,'service'=>$service], function($mail) {
    		$mail->from('admin@excusemyfrenchservices.com');
    		$mail->subject('EMFS : New Quote Request');
    		$mail->to('admin@excusemyfrenchservices.com')->cc('jb.malandain@gmail.com');
    	});

    	Mail::send('email.confirm', ['name'=>$name,'tel'=>$tel,'email'=>$email,'date'=>$date,'location'=>$location,'service'=>$service], function($mail) use($email){
    		$mail->from('admin@excusemyfrenchservices.com');
    		$mail->subject('Confirmation of your event booking');
    		$mail->to($email);
    	});

    	$request->session()->flash('confirm','Thank you ! We well received your demand for booking an event with us. We will contact you shortly for further details.');

    	return Redirect::to(URL::previous() . "#quote-request");
    }

    public function apply(Request $request)
    {
    	$name 			= 	$request->input('name');
    	$famillyName 	= 	$request->input('familly-name');
    	$phone 			= 	$request->input('phone');
    	$email 			= 	$request->input('email');
    	$cv = '';

    	if($request->file('cv')->isValid())
    	{
    		$ext 		=	$request->file('cv')->extension();
    		if($ext == 'pdf')
    		{
    			$cv 			=	$request->file('cv');
    			//Store the file in CV
    			$path = $request->file('cv')->storeAs('cv',
    			$name.'-'.$famillyName.'-cv.'.$ext);
    		}
    	}

    	Mail::send('email.notify-application', ['name'=>$name,'famillyName'=>$famillyName,'email'=>$email,'date'=>$date,'phone'=>$phone], function($mail) use($cv){
    		$mail->from('admin@excusemyfrenchservices.com');
    		$mail->subject('EMFS : New Application Request');
    		$mail->to('admin@excusemyfrenchservices.com')->cc('jb.malandain@gmail.com');
    		$mail->attach($cv);
    	});

    	Mail::send('email.confirm-application',['name'=>$name,'famillyName'=>$famillyName,'email'=>$email,'date'=>$date,'phone'=>$phone], function($mail) use($email){
    		$mail->from('admin@excusemyfrenchservices.com');
    		$mail->subject('Confirmation of your job application');
    		$mail->to($email);
    	});

    	$request->session()->flash('confirm','Your application was successfully sent ! We will contact you shortly.');

    	return Redirect::to(URL::previous() . "#apply");
    }
}
