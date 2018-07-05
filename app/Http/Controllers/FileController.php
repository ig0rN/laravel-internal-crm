<?php

namespace App\Http\Controllers;

use App\File;
use App\Http\Requests\FileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function index(){
        $files = File::paginate(10);
        return view('archive.list', compact('files'));
    }

    public function create(){
        return view('archive.create');
    }

    public function store(FileRequest $request){

        $file = $request->file('file');

        $extension = strtolower($file->getClientOriginalExtension());

        if ($extension=='doc'){
            return redirect('/archive/create')->with(['error' => 'You must convert file in Word to docx extension']);
        }

        if ($extension == 'pdf' || $extension == 'docx' || $extension == 'xlsx' || $extension == 'xls'){

            $name = time(). '.' .$file->getClientOriginalName();

            $real_name = $file->getClientOriginalName();

            $file->storeAs('uploads', $name);

            $file = New File;

            $file->title = $request->title;
            $file->body = $request->body;
            $file->file_name = $name;
            $file->real_name = $real_name;
            $file->save();

            return redirect('/archive')->with(['success' => 'You have successfully added new file.']);

        } else {

            return redirect('/archive/create')->with(['error' => 'You can upload files that have the extension: pdf, docx, xlsx, xls']);

        }
    }

    public function show(File $file){

        return view('archive.preview', compact('file'));
    }

    public function delete(File $file){
        return view('archive.delete', compact('file'));
    }

    public function destroy($id){

            if(isset($_POST['yes'])){
                $file = File::findOrFail($id);
                Storage::delete('/uploads/'.$file->file_name);
                $file->delete();
                return redirect('/archive')->with(['success' => 'You have successfully deleted a file.']);
            }

            if(isset($_POST['no'])){
                return redirect('/archive')->with(['error' => 'You have canceled the deletion of this file.']);
            }

        }

    public function download($name){

        $url = storage_path(). '\app\uploads\\'. $name;
        return response()->download($url);

    }
}

