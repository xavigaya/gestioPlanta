<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contact;

class ContactsController extends Controller
{

    public function index(){
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }
    
    public function create() {
        return view('contacts.create');
    }
    

    public function store(ContactFormRequest $request) {
        $contact = new Contact(array(
            'nom' => $request->get('name, surname, address, phone1, phone2, courtesy_id, company_id, position'),
        ));
        $contact->save();
        return redirect('/contacts')-> with ('El contacte '. $contact->name .' '. $contact->surname.' ha estat afegit!');
    }
    
    
/**
    public function destroy($id) {
        $filmacios = Filmacio::whereId($id)->firstOrFail();
        $filmacios-> delete();
        return redirect('/filmacios')-> with ('status', 'El tipus filmació '.$filmacios->nom.' ha estat esborrat!');
    }
**/

}