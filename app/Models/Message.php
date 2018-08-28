<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Message extends Model
{
	//Get all messages in DB
	public function getMessages()
	{
		$messages = Message::orderBy( 'created_at', 'asc' )->get();
		return $messages;
	}
	
	// Selects one message by id
	public function getMessage( $id )
	{
		$message = Message::where( 'id', $id )->value('message');
		return $message;
	}
	
	// Create new message
	public function createMessage( $message, $request )
	{
		$message->name = $request->name;
		$message->email = $request->email;
		$message->message = $request->message;
		$message->save();
	}
	
	// Update message by id
	public function updateMessage( $id, $request )
	{
		$record = Message::find( $id );
		$record->message = $request->message;
		$record->save();
	}
	
	// Delete message by id
	public function deleteMessage( $id )
	{
		$record = Message::find( $id );
		$record->delete();
	}
}
