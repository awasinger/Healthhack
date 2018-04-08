@extends('layouts.app')
@section('content')
<div class="howItWorks containerHomePage container">
  <h2 class="sectionHeader">How it Works</h2>
  <p class="info">Once a doctor registers a patient with a condition and a phone number, TITLE sends an automated message to the patient with a link to a form. The form contains questions on how the patient is doing, what medications they are taking, and their current heart rate if the information is available. The patient will continue to receive text messages daily, giving them a link to the day’s form. After they submit the form, doctors will see the responses they have given. If a patient gives a particularly urgent response, the doctor receives an alert asking them to look at the response. This system allows patients and doctors to quickly and efficiently communicate with each other.</p>
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
