<?php

namespace App\Repositories\Instructor;

use Illuminate\Support\Facades\Hash;
use App\Instructor;

class InstructorRepository implements InstructorInterface
{
    public function all(){
        return instructor::all();
    }

    public function create($id){
        $newinstructor = new instructor;
        $newinstructor->name = $name;
        $newinstructor->email = $email;
        $newinstructor->gender = $gender;
        $newinstructor->password =Hash::make($password);
        $newinstructor->phone = $phone;
        $newinstructor->about = $about;
        $newinstructor->teach = $teach;
        $newinstructor->experience = $experience;
        $newinstructor->save();
    }
    
    public function get($id)
    {
        return instructor::findOrFail($id);
    }

    public function update($id, $data){
        instructor::findOrFail($id)->update([
            'name'=>$data->name,
            'date'=>$data->date,
            'location'=>$data->location,
            'category'=>$data->category,
            'price'=>$data->price,
            'qty'=>$data->qty,
            'image'=>$data->image
            ]);
    }
}

?>