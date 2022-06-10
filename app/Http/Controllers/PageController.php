<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\Stroage;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function uploadpage(){
        return view('product');
    }

    public function store(Request $request){
        // USE FOR SINGLE UPLOAD
        // $data = new Product(); //saving in db
       
        // $file = $request->file; //from product view
        // $filename = time().'.'.$file->getClientOriginalExtension(); //change file name
        // $request->file->move('assets', $filename); // save files in publc/assets
        
        // //saving in db
        // $data->file=$filename;
        // $data->name=$request->name;
        // $data->description=$request->description;
        // $data->save();

        // return redirect()->back();


        //USE FOR MULTIPLE UPLOAD

        //NOTE : datatime in db not working
        if($request->hasFile('file')){
            $files = $request->file('file');
                foreach($files as $file){
                    $filename = time().'.'.$file->getClientOriginalExtension();
                    $file->move('assets/',$filename);

                    $products_tbl = [
                        'name'=>$request->name,
                        'description'=> $request->description,
                        'file'=>$filename,
                    ];
                    DB::table('products')->insert($products_tbl);
                }
        }
        return redirect()->back();

    }

    //show all downloaded file
    public function show(){
        $data=Product::all();
        return view('showproduct', compact('data'));
    }

    //will download file
    public function download(Request $request,$file){
        
        return response()->download(public_path('assets/'.$file));
    }

    public function view($id){
        $data = Product::find($id);

        return view('viewproduct', compact('data'));
    }

    //for filepond
    // public function upload(Request $request){

    //     if($request->hasFile('file')){
    //         $file = $request->file('file'); //gets file from view(product)
    //         $filename = $file->getClientOriginalName(); 
    //         $folder = uniqid() . '-' . now()->timestamp;
    //         $file->storeAs('img/temp/'.$folder, $filename);

    //         return $folder;
    //     }
    //     return '';
    // }


}
