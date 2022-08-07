<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PDF;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function generatePDF(){
        $users = User::all();

        //return view('myPDF',compact('users'));
        $data = [
            'title' => 'Welcome to Laravel PDF',
            'date' => date('m/d/Y'),
            'users' => $users
        ]; 

         
    

   
        
        $pdf = PDF::loadView('myPDF', $data);
        return $pdf->download('pdf-file.pdf');
    

}

    public function userInformation(){
        $users = DB::table('users')->select('id','name', 'email',)->get();

        $table = "<table border='1' border-collapse='collapse' width='300'";

        $table.="<tr><th>Id</th><th>Name</th><th>Email</th></tr>";
        foreach($users as $user){
            $table.="<tr><td>$user->id</td><td>$user->name</td><td>$user->email</td></tr>";
        }
        $table.="</table>";
        echo $table;
        
    }



}