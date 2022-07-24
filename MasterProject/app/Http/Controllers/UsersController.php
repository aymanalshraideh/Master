<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;

use function Ramsey\Uuid\v1;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     // -------------------register  user--------------------------------
    public function registerindex()
    {
        return view('register');
    }
     // -------------------//register user --------------------------------

       // -------------------register  user--------------------------------
    public function adminRegisterindex()
    {
        return view('dashboard.signup');
    }
     // -------------------//register user --------------------------------

// -------------------Login show --------------------------------

    public function loginindex()
    {
        return view('login');
    }
// -------------------//Login show --------------------------------

public function loginstore(Request $request)
{
    $this->validate($request,[

        'email' => 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',

        "password" => "required|min:6",


    ]);
   $email = $request->email;
   $password =$request->password;
    $useremail=User::where('email',$email)->first();
$depassword= Crypt::decrypt($useremail->password);;
    if(isset($useremail)){
        if($useremail->email == $email && $depassword  == $password){

$request->session()->put('user_id',$useremail->id);
$request->session()->put('user_name',$useremail->name);

// if (session('user_id')){
//     return 'success session';
// }
        // return 'success login';
     return   redirect('/')->with(['status' => 'Welcome '.$useremail->name]);
    }else{
        return redirect('login')->with(['danger' => 'Falid ']);
    }
    }else{
        return 'faled';
    }

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



    //-----------User Reqister-----------
    public function registerstore(Request $request)
    {
        $this->validate($request,[
            "name" => "required",
            "email" => "required|email|unique:users",
            "phone"=>"required|min:10|max:14",
            "password" => "required|min:6",


        ]);
        $register=new User();
        $register->name=$request->name;
        $register->email=$request->email;
        $register->phone=$request->phone;
        $register->rool=$request->rool;
        $register->address=$request->address;
        if ($request->hasFile('license_person_image')) {
            $file=$request->license_person_image;
            $new_file=time().$file->getClientOriginalName();
            $file->move('images',$new_file);
            $register->license_person_image='images/'.$new_file;
             }
             if ($request->hasFile('license_car_image')) {
                $file=$request->license_car_image;
                $new_file=time().$file->getClientOriginalName();
                $file->move('images',$new_file);
                $register->license_car_image='images/'.$new_file;
                 }

        // $hashed=Hash::make($request->password);
        if ($request->hasFile('profileImage')) {
            $file=$request->profileImage;
            $new_file=time().$file->getClientOriginalName();
            $file->move('images',$new_file);
            $register->profileImage='images/'.$new_file;
             }


             if ($request->hasFile('image1')) {
                $file=$request->image1;
                $new_file=time().$file->getClientOriginalName();
                $file->move('images',$new_file);
                $register->image1='images/'.$new_file;
                 }
                 if ($request->hasFile('image2')) {
                    $file=$request->image2;
                    $new_file=time().$file->getClientOriginalName();
                    $file->move('images',$new_file);
                    $register->image2='images/'.$new_file;
                     }
                     if ($request->hasFile('image3')) {
                        $file=$request->image3;
                        $new_file=time().$file->getClientOriginalName();
                        $file->move('images',$new_file);
                        $register->image3='images/'.$new_file;
                         }
        $register->password=  Crypt::encrypt($request->password);
        $register->save();
        return redirect('register')->with(['status' => 'Success Register ']);
    }
    //-----------User Reqister-----------

    //-----------Admin Reqister-----------

    public function adminRegisterstore(Request $request)
    {
        $this->validate($request,[
            "name" => "required",
            "email" => "required|email|unique:users",
            "phone"=>"required|min:10|max:14",
            "password" => "required|min:6",


        ]);
        $register=new User();
        $register->name=$request->name;
        $register->email=$request->email;
        $register->phone=$request->phone;
        $register->rool=$request->rool;

        // $hashed=Hash::make($request->password);
        $register->password=  Crypt::encrypt($request->password);
        $register->save();
        return redirect('registerAdmin')->with(['status' => 'Success Register ']);
    }
    //-----------Admin Reqister-----------







    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        if(session('user_id')){
        $id=session('user_id');
        $user=User::find($id);
return view('user',['user'=>$user]);
}else{
    return redirect('login');
}

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edituser(Request $request )
    {
        // $this->validate($request,[
        //     "name" => "required",
        //     "email" => "required|email|unique:users",
        //     "phone"=>"required|min:10|max:14",
        //     "password" => "required|min:6",


        // ]);

            // handle uploaded file and replace the path in the database record

        $id=session('user_id');
        $edit=User::where('id' , session('user_id'))->first();
        $edit->name=$request->name;
        $edit->email=$request->email;
        $edit->phone=$request->phone;
        $edit->address=$request->address;
        if ($request->hasFile('profileImage')) {
            $file=$request->profileImage;
            $new_file=time().$file->getClientOriginalName();
            $file->move('images',$new_file);
            $edit->profileImage='images/'.$new_file;
             }
             if ($request->hasFile('license_person_image')) {
                $file=$request->license_person_image;
                $new_file=time().$file->getClientOriginalName();
                $file->move('images',$new_file);
                $edit->license_person_image='images/'.$new_file;
                 }
                 if ($request->hasFile('license_car_image')) {
                    $file=$request->license_car_image;
                    $new_file=time().$file->getClientOriginalName();
                    $file->move('images',$new_file);
                    $edit->license_car_image='images/'.$new_file;
                     }

             if ($request->hasFile('image1')) {
                $file=$request->image1;
                $new_file=time().$file->getClientOriginalName();
                $file->move('images',$new_file);
                $edit->image1='images/'.$new_file;
                 }
                 if ($request->hasFile('image2')) {
                    $file=$request->image2;
                    $new_file=time().$file->getClientOriginalName();
                    $file->move('images',$new_file);
                    $edit->image2='images/'.$new_file;
                     }
                     if ($request->hasFile('image3')) {
                        $file=$request->image3;
                        $new_file=time().$file->getClientOriginalName();
                        $file->move('images',$new_file);
                        $edit->image3='images/'.$new_file;
                         }

        // $hashed=Hash::make($request->password);
        $edit->password= $request->password;
        $edit->save();
        return redirect('user');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function destroysession(Request $request)
    {
        if(session('user_id')){
        $request->session()->forget('user_id');
        $request->session()->forget('user_name');

        return redirect('/');}
    }
}
