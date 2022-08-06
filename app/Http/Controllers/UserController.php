<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PDF;

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
}