<?php

namespace App\Http\Controllers;

use App\WeeklyProgram;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use DB;
class WeeklyProgramController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request){
  
  
    $data = WeeklyProgram::orderBy('id','DESC')->paginate(5);

    return view('programs.index',compact('data'))

        ->with('i', ($request->input('page', 1) - 1) * 5);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewprogram()
    {
        return view('programs.view');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  \App\WeeklyProgram  $weeklyProgram
     * @return \Illuminate\Http\Response
     */
    public function show(WeeklyProgram $weeklyProgram)
    {
        //
    }

    public function create(){
        return view('programs.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WeeklyProgram  $weeklyProgram
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WeeklyProgram  $weeklyProgram
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WeeklyProgram  $weeklyProgram
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'desc' => 'required',
            'startDate' => 'required|date',
            'endDate' => 'date|after:startDate',
            'pic'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'
          ]);
     
       $image='';
        if ($request->has('pic')) {
            // Get image file
            $image = $request->file('pic');
            // Make a image name based on user name and current timestamp
            $name = Str::slug($request->input('title')).'_'.time();
            // Define folder path
            $folder = '/uploads/images/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
           $image = $filePath;
        }
        $activity = WeeklyProgram::create(
            [
                'title' => $request->input('title'),
                'desc' => $request->input('desc'),
                'startDate' => $request->input('startDate'),
                'endDate' => $request->input('endDate'),
                'image' => $image
            ]);
    
        return redirect()->route('view.index')->with('success','Weekly Activity Added');

    
}

public function destroy($id)

{

    DB::table("weekly_programs")->where('id',$id)->delete();

    return redirect()->route('view.index')

                    ->with('success','Activity deleted successfully');

}

public function edit($id)

{

    $program = WeeklyProgram::find($id);

    return view('programs.edit',compact('program'));

}



/**

 * Update the specified resource in storage.

 *

 * @param  \Illuminate\Http\Request  $request

 * @param  int  $id

 * @return \Illuminate\Http\Response

 */

public function update(Request $request, $id)

{

    $this->validate($request, [

        'name' => 'required',

        'email' => 'required|email|unique:users,email,'.$id,

        'password' => 'same:confirm-password',

        'roles' => 'required'

    ]);



    $input = $request->all();

    if(!empty($input['password'])){ 

        $input['password'] = Hash::make($input['password']);

    }else{

        $input = Arr::except($input,array('password'));    

    }



    $user = User::find($id);

    $user->update($input);

    DB::table('model_has_roles')->where('model_id',$id)->delete();



    $user->assignRole($request->input('roles'));



    return redirect()->route('settings.users.index')

                    ->with('success','User updated successfully');

}
}