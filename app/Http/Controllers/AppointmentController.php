<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatRoom;
use App\Models\Message;
use App\Models\Vital;
use App\Events\NewChatMessage;

class AppointmentController extends Controller
{
    public function chat($roomId)
    {
        $chatRoom = ChatRoom::find($roomId);
        $patient = $chatRoom->appointment->complaint->user;
        $medicalHistory = $patient->medicalHistory;
        $vitals = Vital::where('user_id', $patient->id)->first();
        
        
        return view('chats.room', compact('chatRoom','medicalHistory', 'vitals'));

    }

    public function chatRoom()
    {

        // $chatRoom = ChatRoom::find($id);
        // return view('chats.room', compact('chatRoom'));
        return ChatRoom::all();

    }

    public function messages(Request $request, $roomId){
        return Message::where('chatroom_id', $roomId)
            ->with('user')
            ->orderBy('created_at', 'DESC')
            ->get(); 
    }

    public function newMessage(Request $request, $roomId)
    {
        $message = new Message;
        $message->user_id = auth()->id();
        $message->chatroom_id = $roomId;
        $message->message = $request->message;
        $message->save();

        broadcast(new newChatMessage($message))->toOthers();

        return $message;
    }
    
}
