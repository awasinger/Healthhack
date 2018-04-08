@extends('layouts.app')
@section('content')
<div class="container FirstFormContent">

  <h2 class="spaceLeft">Hello, NAME</h2>
  <h3 class="spaceLeft">Your doctor, NAME, sent you this daily form about your CONDITION to
    checkup on you. Please answer these questions so your doctor can know how you are feeling</h3>
  <form>
    <div class="form-group">
    <label>What prescribed medications do you take?*</label>
    <input type="text" class="form-control col-md-4 col-form-label text-md-left" placeholder="">
    </div>
    <div class="form-group">
      <label>When do you take these medications?*</label>
      <input type="text" class="form-control col-md-4 col-form-label text-md-left" placeholder="">
    </div>
    <div class="form-group">
      <label>Any notes for your doctor/caregiver?</label>
      <input type="text" class="form-control col-md-4 col-form-label text-md-left" placeholder="">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>
@endsection
