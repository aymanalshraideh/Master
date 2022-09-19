<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Models\Category;
use App\Models\Car;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
    public function getAllUsers()
    {

        $users = User::where('rool', 2)->orWhere('rool', 4)->get();
        // dd($users);
        return view('dashboard.tables')->with(compact('users'));
    }
    public function getAllDrivers()
    {

        $users = User::where('rool', 1)->orWhere('rool', 3)->get();
        // dd($users);
        return view('dashboard.drivers')->with(compact('users'));
    }

    public function getallcategories()
    {
        $category =  Category::all();

        return view('dashboard.category')->with(compact('category'));
    }

    public function addcategory(Request $request)
    {
        // $this->validate($request,[
        //     "category_name" => "required",
        //     "category_image" => "required",



        // ]);

        $category = new Category();
        $category->category_name = $request->category_name;
        if ($request->hasFile('category_image')) {
            $file = $request->category_image;
            $new_file = time() . $file->getClientOriginalName();
            $file->move('images', $new_file);
            $category->category_image = 'images/' . $new_file;
        }
        $category->save();


        return redirect('categoryadmin')->with(['status' => 'Success Add Category ']);
    }
    // public function showsingleCategory(){

    //     // $category=Category::find($id)->first();

    //     return view('dashboard.singlecategory');

    // }
    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('categoryadmin');
    }
    public function editCategory($id, Request $request)
    {
        $category = Category::find($id);
        $category->category_name = $request->category_name;
        if ($request->hasFile('category_image')) {
            $file = $request->category_image;
            $new_file = time() . $file->getClientOriginalName();
            $file->move('images', $new_file);
            $category->category_image = 'images/' . $new_file;
        }
        $category->update();
    }

    public function showallCars()
    {



        $cars = Car::join('users', 'cars.user_id', '=', 'users.id')
            ->join('categories', 'cars.category_id', '=', 'categories.id')
            ->get(['cars.*', 'users.fname', 'users.lname', 'categories.category_name']);
        // dd($cars->all());
        return view('dashboard.cars', compact('cars'));
    }

    public function deleteCar($id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect('allcars');
    }

    public function activeDriver($id)
    {

        $driver = User::find($id);
        if ($driver->rool == 1) {
            $driver->rool = 3;
            $driver->update();
        } else {
            $driver->rool = 1;
            $driver->update();
        }
        return redirect('alldrivers');

    }
    public function deleteDriver($id)
    {
        $car = User::find($id);
        $car->delete();
        return redirect('alldrivers');
    }
}
