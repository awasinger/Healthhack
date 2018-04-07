@extends('layouts.app')
@section('content')
  <h2>Hello, {{ $user->name }}</h2>
<h3>Your doctor {{-- $user->doctor->name --}} sent you this daily form about your Hypertension to checkup on you.
  Please answer these questions so your doctor can know how you are feeling</h3>
<form class="dailyForm" action="/form/{{$token}}" method="post">
    {{csrf_field()}}
  <div class="medicationsTaken textBox">
    <h3 class="question">{{ $questions[0] }}</h3>
    <input type="text" name="medicationsTaken">
  </div>
  
  <div class="medicationsToTake textBox">
    <h3 class="question">{{ $questions[1] }}</h3>
    <input type="text" name="medicationsToTake">
  </div>
  
  
  <div class="currentStress dropDown">
    <h3 class="question">{{ $questions[2] }}</h3>
    <select name="stress">
        <option value="noStress">Not at all</option>
        <option value="lowStress">A little stress</option>
        <option value="mediumStress">Medium amount of stress</option>
        <option value="highStress">A lot of stress</option>
        <option value="superHighStress">A ton of stress</option>
    </select>
  </div>
  
  
  <div class="heartPalpatations dropDown">
    <h3 class="question">{{ $questions[3] }}</h3>
    <select name="heart">
      <option value="noPalpatations">No</option>
      <option value="lightPalpatations">A very light palpation</option>
      <option value="mediumPalpatations">Medium palpitations</option>
      <option value="severePalpatations">Severe palpitations</option>
      <option value="verySeverePalpatations">Very severe palapatations (medical help needed)</option>
    </select>
  </div>
  
  
  <div class="heartRate textBox">
    <h3 class="question">{{ $questions[4] }}</h3>
    <input type="text" name="heartRate">
  </div>
  <input type="submit" value="Submit">
</form>

@endsection
