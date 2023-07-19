<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Register;

class RegisterController extends Controller
{
      public function index() {
          
          $registers = Register::all();
          return view('welcome', ['registers' => $registers]);
      }
    
       public function create() {
        return view('forms.create');
      }
      
       public function register(Request $request) {
        $register = new Register;

        $register->name = $request->name;
        $register->email = $request->email;
        $register->contact = $request->contact;
        

        $user =auth()->user();

        $register->save();

        return redirect('/');
    }
    
    public function destroy($id) {
        Register::findOrFail($id)->delete();
        
        return redirect('/');
    }
      
      public function edit($id) {
          $register = Register::findOrFail($id);
          
          return view('forms.edit', ['register' => $register]);
      }
      
      public function update(Request $request) {
          Register::findOrFail($request->id)->update($request->all());
          
          return redirect('/');
      }
}
