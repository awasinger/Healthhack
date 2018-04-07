<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\User;

class CheckupsController extends Controller
{
    public function __construct()
    {

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($token)
    {
        $user = User::where('token', $token)->first();
        if ($user) {
            $questions = [];
            foreach ($user->ailments as $ailment) {
                foreach ($ailment->questions as $question) {
                    $questions[] = $question->question;
                }
            }
            return view('checkup', compact('user', 'questions', 'token'));
        }
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $token)
    {
        $this->validate($request, [
            'medicationsTaken' => 'required',
            'medicationsToTake' => 'required',
            'stress' => 'required',
            'heart' => 'required',
            'heartRate' => 'required',
        ]);
        $taken = $request->medicationsTaken;
        $toTake = $request->medicationsToTake;
        $stress = $request->stress;
        $heart = $request->heart;
        $rate = $request->heartRate;
/*
        Answer::create([
            'answer' => ,
        ]);
*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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
}
