@extends('layouts.app')
@section('content')
<div class="container FirstFormContent">

  <div class="medication textBox">
    <h2 class="question">What prescription medications do you take:</h2>
    <form method="POST" action="{{ route('register') }}">
      <div class="timeForMedication textBox spaceAboveSmall">
        <h2 class="question">When do you take these medications:</h2>
        <input type="text" name="whenMedicationTaken" class="col-md-4 col-form-label text-md-left">
      </div>
      @if ($errors->has('name'))
          <span class="invalid-feedback">
            <strong>{{ $errors->first('name') }}</strong>
          </span>
        @endif
    </div>
    </form>
  </div>

  <div class="form-group">
    <label>What prescription medications do you take?</label>
    <input type="email" class="form-control col-md-4 col-form-label text-md-left" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">When do you take these medications?</label>
    <input type="password" class="form-control col-md-4 col-form-label text-md-left" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">When do you take these medications?</label>
    <input type="password" class="form-control col-md-4 col-form-label text-md-left" placeholder="">
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>



  <div class="timeForMedication textBox spaceAboveSmall">
    <h2 class="question">When do you take these medications:</h2>
    <input type="text" name="whenMedicationTaken" class="col-md-4 col-form-label text-md-left">
  </div>

  <div class="notesForDoctor textBox spaceAboveSmall">
    <h2 class="question">If you want to, leave a note for you doctor/caregiver</h2>
    <input type="text" name="note" class="col-md-4 col-form-label text-md-left">
  </div>

</div>
@endsection
