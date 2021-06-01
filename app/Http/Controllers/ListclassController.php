<?php

namespace App\Http\Controllers;

use App\Listclass as ListClassModel;
use App\Repositories\Listclass\ListClassInterface;
use App\Repositories\ListClass\ListClassRepository;


use Illuminate\Http\Request;

class ListclassController extends Controller
{

    private $listclassRepo;

    public function __construct(ListClassRepository $repo)
    {
        $this->listclassRepo = $repo;
    }

    public function index(){
        $listclasses = ListClassModel::where('active', 1)->get();
        return view('site.pages.workshop',  ['listclasses' => $listclasses]);
    }

    public function more_data(Request $request)
    {
        if($request->ajax()){
            $skip=$request->skip;
            $take=6;
            $products=Product::skip($skip)->take($take)->get();
            return response()->json($products);
        }else{
            return response()->json('Direct Access Not Allowed!!');
        }
    }

    

    public function createByAdmin(){
        return view('admin.class.create');
    }

    public function createByInstructor(){
        return view('instructor.class');
    }

    public function savebyAdmin(Request $request){
        $listclass = new ListClassModel;
        $listclass->name = $request->name;
        $listclass->date = $request->date;
        $listclass->location = $request->location;
        $listclass->category = $request->category;
        $listclass->price = $request->price;
        $listclass->qty = $request->qty;
        $listclass->image = $request->image;
        $listclass->save();
        return redirect(route('listclassindex'));
    }

    public function savebyInstructor(Request $request){
        $listclass = new ListClassModel;
        $listclass->name = $request->name;
        $listclass->date = $request->date;
        $listclass->location = $request->location;
        $listclass->category = $request->category;
        $listclass->price = $request->price;
        $listclass->qty = $request->qty;
        $listclass->image = $request->image;
        $listclass->save();
        return redirect(route('workshop'));
    }


    public function classlist()
    {
        $listclasses = ListClassModel::all();
        return view('admin.class.index', compact('listclasses'));
    }

    public function classdetail()
    {
        $listclasses = ListClassModel::findorFail($id);
        return view('admin.class.detail', compact('listclasses'));
    }

    public function edit($id)
    {
        $listclass = ListClassModel::findorFail($id);
        return view('admin.class.edit', compact('listclass'));
    }

    public function update(Request $request){
        $newlistclass = new ListClassModel;
        $newlistclass->name = $request->input('name');
        $newlistclass->date = $request->input('date');
        $newlistclass->location = $request->input('location');
        $newlistclass->category = $request->input('category');
        $newlistclass->price = $request->input('price');
        $newlistclass->qty = $request->input('qty');
        $newlistclass->image = $request->input('image');
        $newlistclass->active = $request->input('active') ? 1 : 0;
        $this->listclassRepo->update($request->id,$newlistclass);
        return redirect(route('listclassindex'));
    }

    public function delete( $id)
    {
        $this->listclassRepo->delete($id);
        return redirect(route('listclassindex'));
    }
}
