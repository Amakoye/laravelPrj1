<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    //
    public function submit(Request $request){
    	//return $request->input('name');
    	//validation
    	$this->validate($request, [
    		'name' => 'required',
    		'email'=> 'required'
    	]);
    	//return 'SUCCESS';
        //Create new Message
        $Message = new Message;
        $Message->name = $request->input('name');
        $Message->email = $request->input('email');
        $Message->message = $request->input('message');
        //Save
        $Message->save();
        //redirect with flash messages
        return redirect('/home')->with('success','Message sent');
    }

    public function getMessages(){
        $messages = Message::all();

        return view('messages')->with('messages', $messages);
    }
}
