<?php

namespace App\Http\Controllers;

use App\Instructor as InstructorModel;
use App\Repositories\Instructor\InstructorRepository;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class InstructorController extends Controller{
    private $instructorRepo;

    public function __construct(InstructorRepository $repo)
    {
        $this->instructorRepo = $repo;
    }

    public function create(){
        return view('instructor.register');
    }

    public function save(Request $request){
        $instructor = new InstructorModel;
        $instructor->name = $request->name;
        $instructor->email = $request->email;
        $instructor->gender = $request->gender;
        $instructor->password = Hash::make($request->password);
        $instructor->phone = $request->phone;
        $instructor->about = $request->about;
        $instructor->teach = $request->teach;
        $instructor->experience = $request->experience;
        $instructor->save();
        return redirect(route('instructorindex'));
    }


    public function Instructorlist(){
        $instructors = InstructorModel::all();
        return view('admin.instructor.index', ['instructors' => $instructors]);
    }

    public function edit($id)
    {
        $instructor = InstructorModel::findorFail($id);
        return view('admin.instructor.edit', ['instructor' => $instructor]);
    }

    public function update(Request $request){
        $newinstructor = new InstructorModel;
        $newinstructor->name = $request->input('name');
        $newinstructor->email = $request->input('email');
        $newinstructor->phone = $request->input('phone');
        $newinstructor->about = $request->input('about');
        $newinstructor->teach = $request->input('teach');
        $newinstructor->experience = $request->input('experience');
        $this->instructorRepo->update($request->id,$newinstructor);
        return redirect(route('instructorindex'));
    }
}

?>