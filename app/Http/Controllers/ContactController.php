<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function confirm(ContactRequest $request)
    {
        $inputs = [
            'lastname' => $request->input('lastname'),
            'firstname' => $request->input('firstname'),
            'gender' => $request->input('gender'),
            'email' => $request->input('email'),
            'postcode' => $request->input('postcode'),
            'address' => $request->input('address'),
            'building_name' => $request->input('building_name'),
            'opinion' => $request->input('opinion')
        ];
        $request->session()->put($inputs);
        return view('confirm', ['inputs' => $inputs]);
    }    
    public function create(ContactRequest $request)
    {
        $contact = new Contact();
        $contact->lastname = $request->input('lastname');
        $contact->firstname = $request->input('firstname');
        $contact->fullname = $request->input('lastname') . ' ' . $request->input('firstname');
        $contact->gender = $request->input('gender');
        $contact->email = $request->input('email');
        $contact->postcode = $request->input('postcode');
        $contact->address = $request->input('address');
        $contact->building_name = $request->input('building_name');
        $contact->opinion = $request->input('opinion');
        $contact->save();
        $request->session()->forget(['lastname', 'firstname', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);
        return view('confirm');
    }
        public function complete()
    {
        return view('thanks');
    }
    public function search(Request $request)
    {
        $query = Contact::select('*');
        if (!empty($request->input('firstname'))) {
            $query->where('firstname', 'LIKE', '%'.$request->input('firstname').'%');
        }
        if (!empty($request->input('lastname'))) {
            $query->where('lastname', 'LIKE', '%'.$request->input('lastname').'%');
        }
        if (!empty($request->input('fullname'))) {
            $query->where('fullname', 'LIKE', '%'.$request->input('fullname').'%');
        }
        if (!empty($request->input('start_date')) && !empty($request->input('end_date'))) {
            $start_date = date('Y-m-d H:i:s', strtotime($request->input('start_date')));
            $end_date = date('Y-m-d H:i:s', strtotime($request->input('end_date')));
            $query->whereBetween('created_at', [$start_date, $end_date]);
        }
        if (!empty($request->input('email'))) {
            $query->where('email', 'LIKE', '%'.$request->input('email').'%');
        }
        if (!empty($request->input('gender'))) {
            $query->where('gender', $request->input('gender'));
        }
        $contacts = $query->orderBy('created_at', 'desc')->paginate(4);
        return view('search', compact('contacts'));
    }
    public function delete(Request $request)
    {
        $request->session()->forget('inputs');
        return redirect()->route('contact.index')->with('message', '検索条件を削除しました');
    }
}
