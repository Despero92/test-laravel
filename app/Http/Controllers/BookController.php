<?php
namespace app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class BookController extends Controller
{
	// Open index page
	public function index( Message $messageModel )
	{
		$messagesArray = $messageModel->getMessages();
		$data = [
			  'title' => 'Гостевая книга на Laravel 5.1',
			  'pagetitle' => 'Гостевая книга',
			  'messagesArray' => $messagesArray
		];
		return view( 'pages.messages.index', $data );
	}
	
	
	// Responsible for editing the message
	public function edit( $id, Request $request, Message $messageModel )
	{
		$message = $messageModel->getMessage( $id );
		$data = [
			  'title' => 'Гостевая книга на Laravel 5.1',
			  'pagetitle' => 'Гостевая книга',
			  'id' => $id,
			  'message' => $message
		];
		return view( 'pages.messages.edit', $data );
	}
	
	
	// Responsible for updating the message
	public function update( $id, Message $message, Request $request )
	{
		$message->updateMessage( $id, $request );
		return redirect()->route( 'home' );
	}

	
	//	Responsible for storing the message
	public function store( Message $message, Request $request )
	{
		$this->validate( $request, [
			  'email' => 'required|max:100',
			  'name' => 'required|max:50',
			  'message' => 'required|max:225'
		]);
		$message->createMessage( $message, $request );
		return redirect()->route( 'home' );
	}
	
	
	//	Responsible for deleting the message
	public function delete( $id, Message $message )
	{
		$message->deleteMessage( $id );
		return redirect()->route( 'home' );
	}
}
