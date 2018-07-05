<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentCreateRequest;
use App\Project;
use App\ProjectComment;
use Illuminate\Http\Request;

class ProjectCommentController extends Controller
{
    public function index($id){
        $project = Project::findOrFail($id);
        return view('project.comment', compact('project'));
    }

    public function store(Project $project, CommentCreateRequest $request){

        $project->addComment($request->title, $request->body, auth()->id());

        return redirect('/project-list/'. $project->id)->with(['success' => 'You have successfully added a comment.']);
    }

    public function delete(ProjectComment $comment){

        return view('project.comment-del', compact('comment'));
    }

    public function destroy($id){

        if(isset($_POST['yes'])){
            $comment = ProjectComment::findOrFail($id);
            $comment->delete();
            return redirect('/project-list/' . $comment->project_id)->with(['success' => 'You have successfully deleted a comment.']);
        }

        if(isset($_POST['no'])){
            $comment = ProjectComment::findOrFail($id);
            return redirect('/project-list/' . $comment->project_id)->with(['error' => 'You have canceled the deletion of this comment.']);
        }

    }
}
