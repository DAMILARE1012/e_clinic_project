<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatRoom;
use App\Models\Message;
use App\Events\NewChatMessage;

class AppointmentController extends Controller
{
    public function chat()
    {

        return view('chats.room');

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
            ->orderBy('created_at', 'ASC')
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
