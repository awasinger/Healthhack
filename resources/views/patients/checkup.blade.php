@extends('layouts.app')
@section('content')

<div class="container dailyFormContent">


  <h2 class="spaceLeft">Hello, {{ $user->name }}</h2>
  <h3 class="spaceLeft">Your doctor, {{ $user->doctor->name }}, sent you this daily form about your Hypertension to checkup on you.
    Please answer these questions so your doctor can know how you are feeling</h3>
  <form class="dailyForm spaceLeft spaceAboveSmall" action="/form/{{$token}}" method="post">
  {{csrf_field()}}


    <div class="medicationsTaken textBox">
      <h3 class="question">{{ $questions[0] }}</h3>
      <input type="text" name="medicationsTaken" class="col-md-4 col-form-label text-md-left">
    </div>


    <div class="medicationsToTake textBox spaceAboveSmall">
      <h3 class="question">{{ $questions[1] }}</h3>
      <input type="text" name="medicationsToTake" class="col-md-4 col-form-label text-md-left">
    </div>


    <div class="currentStress dropDown spaceAboveSmall">
      <h3 class="question">{{ $questions[2] }}</h3>
      <select class="col-md-3 col-form-label text-md-left" name="stress">
        <option value="noStress">Not at all</option>
        <option value="lowStress">A little stress</option>
        <option value="mediumStress">Medium amount of stress</option>
        <option value="highStress">A lot of stress</option>
        <option value="superHighStress">A ton of stress</option>
      </select>
    </div>


    <div class="heartPalpatitions dropDown spaceAboveSmall">
      <h3 class="question">{{ $questions[3] }}</h3>
      <select class="col-md-3 col-form-label text-md-left" name="heart">
        <option value="noPalpitations">No</option>
        <option value="lightPalpitations">A very light palpitation</option>
        <option value="mediumPalpitations">Medium palpitations</option>
        <option value="severePalpitations">Severe palpitations</option>
        <option value="verySeverePalpitations">Very severe palpitations</option>
      </select>
    </div>


    <div class="heartRate textBox spaceAboveSmall">
      <h3 class="question">{{ $questions[4] }}</h3>
      <input type="text" name="heartRate" class="col-md-4 col-form-label text-md-left">
    </div>
    <input type="submit" value="Submit" class="btn btn-primary spaceAbove">
  </form>
</div>
@endsection
