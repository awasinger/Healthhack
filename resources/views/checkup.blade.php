@extends('layouts.app')
@section('content')
  <h2>Hello, NAME HERE</h2>
<h3>Your doctor NAME HERE sent you this daily form about your Hypertension to checkup on you.
  Please answer these questions so your doctor can know how you are feeling</h3>
<form class="dailyForm" action="">
  <div class="medicationsTaken textBox">
    <h3 class="question">What medications have taken so far today:</h3>
    <input type="text" name="medicationsTaken">
  </div>
  <div class="medicationsToTake textBox">
    <h3 class="question">What medications are you going to take today:</h3>
    <input type="text" name="medicationsToTake">
  </div>
  <div class="currentStress dropDown">
    <h3 class="question">Are you under any stress today:</h3>
    <select>
      <option value="noStress">Not at all</option>
      <option value="lowStress">A little stress</option>
      <option value="mediumStress">Medium amount of stress</option>
      <option value="highStress">A lot of stress</option>
      <option value="superHighStress">A ton of stress</option>
    </select>
  </div>
  <div class="heartPalpatations dropDown">
    <h3 class="question">Have you felt any heart palpatations today:</h3>
    <select>
      <option value="noPalpatations">No</option>
      <option value="lightPalpatations">A very light palpation</option>
      <option value="mediumPalpatations">Medium palpatations</option>
      <option value="severePalpatations">Severe palpatations</option>
      <option value="verySeverePalpatations">Very severe palapatations(medical help needed)</option>
    </select>
  </div>
  <div class="heartRate textBox">
    <h3 class="question">If you have a smart watch or other device, what is your current
      heart rate:</h3>
    <input type="text" name="heartRate">
  </div>
  <input type="submit" value="Submit">
</form>

@endsection
