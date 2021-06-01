<?php

namespace App\Repositories\ListClass;
use App\Listclass;

class ListClassRepository implements ListClassInterface
{
    public function all(){
        return listclass::all();
    }

    public function create($id){
        $newlistclass = new listclass;
        $newlistclass->name = $name;
        $newlistclass->date = $date;
        $newlistclass->location = $location;
        $newlistclass->category = $category;
        $newlistclass->price = $price;
        $newlistclass->qty = $qty;
        $newlistclass->image = $image;
        $newlistclass->save();
    }

    public function get($id){
        return listclass::findOrFail($id);
    }

    public function update($id, $data){
        listclass::findOrFail($id)->update([
            'name'=>$data->name,
            'date'=>$data->date,
            'location'=>$data->location,
            'category'=>$data->category,
            'price'=>$data->price,
            'qty'=>$data->qty,
            'image'=>$data->image,
            'active'=>$data->active
            ]);
    }

    public function delete($id){
        $deletelistclass = delete::find($id);
        $deletelistclass->delete();
    }
}

?>