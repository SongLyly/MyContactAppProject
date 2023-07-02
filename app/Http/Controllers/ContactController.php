<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Contact;
use App\Repository\CompanyRepositories;
use Illuminate\Http\Request;

class ContactController extends Controller
{

//    public function __construct(CompanyRepositories $company)
//    {
//        this -> $companies = $company;
//    }

    public function index(CompanyRepositories $company){
        $contacts = Contact::where(function ($query){
            if ($companyID = request()->query("company_id")){
                $query->where("company_id", $companyID);
            }
        })->get();

        $companies = $company->company_data();

        return view('contacts.index',['contacts'=>$contacts, 'companies'=>$companies]);
    }

    public function create(Contact $contact){
        $contacts = Contact::all();
        $companies = Company::all();

        return view('contacts.create', compact('contacts','companies'));
    }
    public function show($id)
    {
        $contact = Contact::find($id);

        return view('contacts.show')->with('contact',$contact);
    }
}
