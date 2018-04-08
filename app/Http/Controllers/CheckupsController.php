<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\User;
use App\Checkup;
use App\Answer;

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
            if ($user->ailments) {
                foreach ($user->ailments as $ailment) {
                    foreach ($ailment->questions as $question) {
                        $questions[] = $question->question;
                    }
                }
                
                return view('checkup', compact('user', 'questions', 'token'));
            }
            
            
        }
        return redirect('/')->with($user);
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
        $user = User::where('token', $token)->first();
        
        $taken = $request->medicationsTaken;
        $toTake = $request->medicationsToTake;
        $stress = $request->stress;
        $heart = $request->heart;
        $rate = $request->heartRate;
        
//         $max = (DB::table('users')->max('business_id') >= 0 ? DB::table('users')->max('id') : 0);
        
        $checkup = Checkup::create([
            'user_id' => $user->id,
        ]);
        
        Answer::create([
            'answer' => $request->medicationsTaken,
            'question_id' => 1,
            'checkup_id' => $checkup->id,
        ]);
        
        Answer::create([
            'answer' => $request->medicationsToTake,
            'question_id' => 2,
            'checkup_id' => $checkup->id,
        ]);
        
        Answer::create([
            'answer' => $request->stress,
            'question_id' => 3,
            'checkup_id' => $checkup->id,
        ]);
        
        Answer::create([
            'answer' => $request->heart,
            'question_id' => 4,
            'checkup_id' => $checkup->id,
        ]);
        
        Answer::create([
            'answer' => $request->heartRate,
            'question_id' => 5,
            'checkup_id' => $checkup->id,
        ]);
        
        return redirect('/');
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
