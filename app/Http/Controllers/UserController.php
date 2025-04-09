<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $num =70;
        $data = '';
        $names = ['Juan','Pedro','Maria','Jose'];
        return view('derectives', compact('num','data','names'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*DB::table('users')->insert([
            'name' => 'Pepe',
            'lastname' => 'tovar',
            'email' => 'pepetovar@gmail.com',
            'phone' => '+52 1234567890',
            'password' => Hash::make('12345678'),
        ],[
            'name' => 'Rosa',
            'lastname' => 'marquez',
            'email' => 'rosa@gmail.com',
            'phone' => '+52 1234567890',
            'password' => Hash::make('12345678'),
        ],
    );*/
    /* $user = new User();
    $user->name = 'José';
    $user->lastname = 'Tovar';
    $user->email = 'jose@gmail.com';
    $user->phone ='+52 1234567890';
    $user->password = Hash::make('12345678');
    $user->save();*/
   /* $dato = [  'name' => 'Pepe',
        'lastname' => 'tovar',
        'email' => 'rosa@gmail.com',
        'phone' => '+52 1234567890',
        'password' => Hash::make('12345678')];
    User::create($dato);//Eloquent
*/
        $dato=[
            'name'=> $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'lastname' => $request->lastname,
            'phone' => $request->phone,
        ];
        User::create($dato);
        return 'Usuario creado';
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       // DB::table('users')->where('id',$id)->update(['name' => 'Pepe','lastname' => 'Salas']);
        $user = User::find($id);
        $user->name = 'Cristian';
        $user->lastname = 'Salas';
        $user->save();
        return 'Usuario actualizado';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       // DB::table('users')->where('id',$id)->delete();
        $user = User::find($id);
        $user->delete();
        //User::where('id,$id)->delete();//Eloquent
        return 'Usuario eliminado';
    }
    public function data(){
       // $user = DB::select('select * from users ');//SQL
        $user = DB::table('users')->get();//Query Builder
        $users= User::all();//Eloquent
        //$users = User::where('id','>', 5)->get();//Eloquent
        //dd($user);
        //$usr = DB::select('select * from users where id = ?', [2]);//SQL
        $usr =DB::table('users')->where('id',5)->firstOrFail();//Query Builder
        $usr = DB::table('users')->pluck('email');//Query Builder
      // $usr = DB::table('users')->where('name','Breanne')->count();//Query Builder
       //$usr = DB::table('users')->select('name','lastname')->get();//Query Builder
       //$query = DB::table('users')->select('name as nombre','lastname as apellido');//Query Builder
       //$usr = $query->addSelect('email')->get();//Query Builder
        //$usr = User::find(2);   //Eloquent
        //dd($usr);
        return view('data', compact('users', 'usr'));
    }
}
