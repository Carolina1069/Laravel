<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use App\Models\Project;
class PortController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function __invoke(Request $request)
    {
        return view('portafolio', compact ('portafolio'));

    }

  public function index()
    {
      /*  $portafolio = [
            ['title'=>'Proyecto #1'],
            ['title'=>'Proyecto #2'],
            ['title'=>'Proyecto #3'],
            ['title'=>'Proyecto #4'],
        ];*/

       // $portafolio= DB:: table ('project')-> get();

       $project= Project::orderby('created_at','desc')-> get();

        return view('portafolio', compact ('project'));

        //return view('portafolio', compact ('portafolio'));

    }

    public function show(Project $project)
    {

           // return Project::find ($id);
           return view('Project.show', [
            'project'=>$project
        ]);


    }

    public function create()

    {

    return view ('Project.create');

    }

    public function store ()
    {

        Project::create([

            'title'=>request ('title'),
            'description'=>request ('description')

        ]);

        return request();
    }


}
