<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use Auth;
use Twilio\Rest\Client;
use App\Ailment;

class PatientsController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except(['index']);
        $this->middleware('guest')->only(['index']);
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($token)
    {
        $patient = Patient::where('token', $token) -> first();
        $ailmentIds = $patient -> ailments -> map(function($ailment) {
           return $ailment -> id; 
        });
        
        return view('questionaire', [
            'patient' => $patient,
            'ailmentIds' => $ailmentIds
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        
        $patient = Patient::create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'user_id' => Auth::id(),
            'token' => sha1(uniqid($email, true)),
        ]);
        
        return redirect('/patients/'.$patient->id.'/ailments');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($token)
    {
        $user = Patient::where('token', $token)->first();
        
        return view('patients.checkup', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $patient = Patient::find($request->id);
        $ailments = $request->ailments;
        
        $patient->ailments()->detach();
        if ($ailments) {
            foreach ($ailments as $ailment) {
                $patient->ailments()->attach($ailment);
            }
        }
        $sid = 'AC251a26c0ca40ea1123e041c193bd8ae9';
        $token = 'dab88a611cbb7ad86f79d584145f15e9';
        $client = new Client($sid, $token);

        // Use the client to do fun stuff like send text messages!
        $client->messages->create(
            // the number you'd like to send the message to
            $patient->phone,
            array(
                // A Twilio phone number you purchased at twilio.com/console
                'from' => '+13143101429',
                // the body of the text message you'd like to send
                'body' => 'Hey '. $patient->name . ' visit '.config('app.url').'/questionaire/' . $patient->token . ' to fill out your checkup!',
            )
        );
        
        return redirect('/');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function selectAilments($id) {
        $ailments = Ailment::all();
        $patient = Patient::find($id);
        return view('patients.selectAilments', compact('ailments', 'patient'));
    }
}