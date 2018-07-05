<?php

namespace App\Http\Controllers;

use App\Client;
use App\ClientComment;
use App\Http\Requests\CommentCreateRequest;

class ClientCommentController extends Controller
{
    public function index($id){
        $client = Client::findOrFail($id);
        return view('client.comment', compact('client'));
    }

    public function store(Client $client, CommentCreateRequest $request){
        $client->addComment($request->title, $request->body, auth()->id());

        return redirect('/client-list/'. $client->id)->with(['success' => 'You have successfully added a comment.']);
    }

    public function delete(ClientComment $comment){

        return view('client.comment-del', compact('comment'));
    }

    public function destroy($id){

        if(isset($_POST['yes'])){
            $comment = ClientComment::findOrFail($id);
            $comment->delete();
            return redirect('/client-list/' . $comment->client_id)->with(['success' => 'You have successfully deleted a comment.']);
        }

        if(isset($_POST['no'])){
            $comment = ClientComment::findOrFail($id);
            return redirect('/client-list/' . $comment->client_id)->with(['error' => 'You have canceled the deletion of this comment.']);
        }

    }
}
