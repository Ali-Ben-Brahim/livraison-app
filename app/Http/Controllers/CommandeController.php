<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;


class CommandeController extends Controller
{
    public function createUserForm(Request $request) {
        return view('test');
      }
     
      // Store Form data in database
      public function UserForm(Request $request) {
          // Form validation
          $this->validate($request, [
              'nom' => 'required',
              'adresse' => 'required',
              'phone' => 'required',
              'prix'=>'required',
           ]);
          //  Store data in database
          Commande::create($request->all());
          return back()->with('success', 'Your form has been submitted.');
      }
   
    public function index()
    {
        return view('test');
    }
    public function submittest()
    {
        return "form submit";
    }
  
    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        
    }

  
    public function show(commande $commande)
    {
        
    }

  
    public function edit(commande $commande)
    {
        
    }

 
    public function update(Request $request, commande $commande)
    {
        
    }

    public function destroy(commande $commande)
    {
        
    }
}
