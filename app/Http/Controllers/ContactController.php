<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use App\Date;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }
    public function confirm(Request $request)
    {
        $this->validate($request, Contact::$rules);
        $contact = new Contact;
        $inputs=$request->all();
        unset($inputs['_token_']);
        $contact->fill($inputs)->save();

    
        return view('/contact/confirm',['inputs'=>$inputs]);
        
    }
    public function thanks(Request $request)
    {
        $inputs=$request->all();

        if($request->has("back")){
        return redirect('/contact')->withInput($inputs);
        }else{
            return view('/contact/thanks');
        }
    }
    public function find(Request $request)
    {
        $query = Contact::query();

        $search1 = $request->input('fullname');
        $search2 = $request->input('email');
        $search3 = $request->input('create_at');
        $search4 = $request->input('gender');
        
        
        if ($request->has('fullname') && $search1 != '') {
            $query->where('fullname', 'like', '%'.$search1.'%')->get();
        }

        if ($request->has('email') && $search2 != '') {
            $query->where('email', 'like', '%'.$search2.'%')->get();
        }

        


        $contacts = $query->paginate(4);



       
      return view('/contact/find')->with('contacts', $contacts);
    }
    public function delete(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('/contact/find');
    }
}


