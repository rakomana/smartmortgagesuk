<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use App\Notifications\Admin\NotifyAdmin;
use App\Http\Requests\ContactStoreRequest;
use Illuminate\Support\Facades\Notification;
use Illuminate\Database\ConnectionInterface as DB;

class ContactController extends Controller
{
    private $db;
    private $contact;

    /**
    *
    * Inject models into the constructor
    * @param DB $db
    *
    */
    public function __construct(
        Contact $contact, 
        DB $db
    )
    {
        $this->contact = $contact;
        $this->db = $db;
    }

    /**
    *
    * 
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        SEOMeta::setTitle('Smartmortgagesuk');

        return view('contact');
    } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ContactStoreRequest $request)
    {
        $this->db->beginTransaction();

        $contact = new $this->contact();
        $contact->first_name = $request->first_name;
        $contact->phone_number = $request->phone_number;
        $contact->message = $request->message;
        $contact->email = $request->email;
        $contact->save();

        Notification::route('mail', config('mail.support_address'))
            ->notify(new NotifyAdmin(
                $contact
        ));

        $this->db->commit();

        return response()->json(['contact_information' => $contact]);
    }
}