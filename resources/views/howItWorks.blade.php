@extends('layouts.app')
@section('content')
<div class="howItWorks containerHomePage container">
  <h2 class="sectionHeader">How it Works</h2>
  <p class="info">Once a doctor registers a patient with a condition and a phone
    number, TITLE sends an automated message to the patient with a link to a form. The form asks
    how the patient is feeling, what medications they have taken, and what their current heart
    rate is. The patient will continue to recieve text messages,
    daily giving them a link to the day's form. The doctor sees
    a list of all the responses the patient has given. If a patient gives a particularly
    urgent response, the doctor will see an alert on their page, asking them to look at the
    response. This system allows patients to quickly and efficiently communicate with their
    doctor</p>
    <div class="screenshots">
      <p class="captions">Below is an image of an example daily form that a
        patient may recieve.
       <img src="{{URL::asset('/img/FormScreenshot.png')}}" alt="Daily form" class="screenshot" >
      <p class="captions">Below is an image of the screen that the health care
        provider would see.</p>
      <img src="{{URL::asset('/img/DoctorView.png')}}" class="screenshot">
    </div>
</div>
@endsection
