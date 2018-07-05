<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectCreateRequest;
use App\Http\Requests\ProjectUpdateRequest;
use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::paginate(10);
        return view('project.list', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectCreateRequest $request)
    {
        if(isset($request)){
            Project::create($request->all());
            return redirect('/project-list')->with(['success' => 'You have successfully added new project.']);
        } else {
            return redirect('/project-list')->with(['error' => 'Something went wrong, please try again.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        $comments = $project->comment;

        return view('project.preview', compact('project', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectUpdateRequest $request, $id)
    {
        if(isset($request)){
            Project::findorfail($id)->update($request->all());
            return redirect('/project-list')->with(['success' => 'You have successfully updated a project.']);
        } else {
            return redirect('/project-list')->with(['error' => 'Something went wrong, please try again.']);
        }
    }

    /**
     * Show the form for deleting the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Project $project){

        return view('project.delete',compact('project'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(isset($_POST['yes'])){
            $project = Project::findOrFail($id);
            $project->delete();
            return redirect('/project-list')->with(['success' => 'You have successfully deleted a project.']);
        }

        if(isset($_POST['no'])){
            return redirect('/project-list')->with(['error' => 'You have canceled the deletion of this project.']);
        }

    }

    public function filter($filter){
        $projects = Project::where('status', '=', $filter)->get();
        return view('project.filter', compact('projects', 'filter'));
    }
}
