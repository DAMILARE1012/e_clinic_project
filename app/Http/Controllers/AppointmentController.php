<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatRoom;
use App\Models\Message;
use App\Events\NewChatMessage;

class AppointmentController extends Controller
{
    public function chatRoom($id)
    {

        $chatRoom = ChatRoom::find($id);
        return view('chats.room', compact('chatRoom'));

    }

    public function messages(Request $request, $chatRoom){
        return Message::where('chatroom_id', $chatRoom)
            ->with('user')
            ->orderBy('created_at', 'ASC')
            ->get(); 
    }

    public function newMessage(Request $request, $chatRoom)
    {
        $message = new Message;
        $message->user_id = auth()->id();
        $message->chatroom_id = $chatRoom;
        $message->message = $request->message;
        $message->save();

        broadcast(new NewChatMessage($message))->toOthers();
        return $message;
    }
    
}
