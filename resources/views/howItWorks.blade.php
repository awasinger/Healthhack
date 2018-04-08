@extends('layouts.app')
@section('content')
<div class="howItWorks containerHomePage container">
  <h2 class="sectionHeader">How it Works -</h2>
  <p class="info">Once a doctor/caregiver registers a patient with a condition and a phone
    number, TITLE sends an automated message to the patient with a link to a form. For the
    first time, the form asks for some basic information about what medication the patient
    is on. After that, the patient is redirected to the daily form which contains questions
    on how the patient is feeling, what medications they have taken, and their current heart
    rate, if that's available to them. The patient will continue to recieve text messages,
    daily giving them a link to the day's form. On the caregiver/doctor's side, they see
    a list of all the responses the patient has given. If a patient gives a particularly
    urgent response, the doctor/caregiver will see an alert on their page, asking them to look at the
    response. This system allows patients to quickly and efficiently communicate with their
    health care provider</p>
    <div class="screenshots">
      <p class="captions">Below is an image of an example daily form that a
        patient may recieve.
       <img src="{{URL::asset('/img/FormScreenshot.png')}}" alt="Daily form" class="image" >
      <p class="captions">Below is an image of the screen that the health care
        provider would see.</p>
      <img src="" class="doctorSideScreenshot">
    </div>
</di
@endsection
