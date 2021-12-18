<?php

namespace App\Http\Controllers;

use App\Models\Problem;
use App\Models\Translate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;

class ProblemController extends Controller
{
    public function getProblems(Request $request, $lang)
    {
        App::setLocale($lang);
        $Problems = Problem::get();
        $Translates = Translate::get();
        return view('dashboard/problemAll', compact('Problems', 'Translates'));
    }

    public function getMyTickets($lang)
    {
        App::setLocale($lang);
        $Problems = Problem::get();
        $Translates = Translate::get();
//        $Problems = Problem::where('device', '=', $request->user()->username)get();

        return view('dashboard/problemMyTickets', compact('Problems', 'Translates'));
    }

    public function getProblemAdd(Request $request, $lang)
    {
        App::setLocale($lang);
//        if ($request->user()->type == 'Viewer' || $request->user()->type == 'Management') {
//            return redirect('/');
//        }
        return view('dashboard/problemNew');
    }

    public function insertProblem(Request $request, $lang)
    {
        App::setLocale($lang);
//        if ($request->user()->type == 'Viewer' || $request->user()->type == 'Management') {
//            return redirect('/');
//        }
// make validation to item information
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'gov_id' => ['required', 'string'],
            'dist_id' => ['required', 'string'],
            'image1' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:4096',
        ]);
        if ($validator->fails())
            return redirect()->back()->WithErrors($validator->errors()->all())->withInput();
        else {
// get item information & save it in database from dashboard
            $Problem = new Problem();
            if ($request->hasFile('image1')) {
                $imageName = $request->file('image1')->getClientOriginalName();
                // Get Filename
                $filename = pathinfo($imageName, PATHINFO_FILENAME);
                // Get just Extension
                $extension = $request->file('image1')->getClientOriginalExtension();
                // Filename To store
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
//                dd($fileNameToStore);
                $path = $request->file('image1')->storeAs('public/image', $fileNameToStore);
            } else {
                $fileNameToStore = 'noimage.jpg';
            }

            $Problem->name = $request->name;
            $Problem->description = $request->description;
            $Problem->gov_id = $request->description;
            $Problem->dist_id = $request->dist_id;
            $Problem->image1 = $fileNameToStore;
//              $Problem->device = $request->user()->id;
            $Problem->save();
            if(app()->getLocale() == "en"){
                return redirect('/en/problem/all')->with('add', 'add');
            }
            if(app()->getLocale() == "ar"){
                return redirect('/ar/problem/all')->with('add', 'add');
            }
        }
    }

    public function test(Request $request)
    {
        dd(time());
        return redirect()->back();
    }
}
