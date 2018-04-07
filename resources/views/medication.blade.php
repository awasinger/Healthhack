@extends('layouts.app')
@section('content')
<div class="container FirstFormContent">

  <div class="medication textBox">
    <h2 class="question">What prescription medications do you take:</h2>
    <form method="POST" action="{{ route('register') }}">
    <div class="col-md-6">
      <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

      @if ($errors->has('name'))
          <span class="invalid-feedback">
            <strong>{{ $errors->first('name') }}</strong>
          </span>
        @endif
    </div>
    </form>
  </div>

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
