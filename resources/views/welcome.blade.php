@extends('layouts.app')
@section('content')
<section>
  <div class="containerHomePage container">


    <div class="aboutUs">

      <h2 class="sectionHeader">About us -</h2>
      <p class="info">TITLE is a way for doctors and patients to get in more frequent contact
        with each other. Once a doctor or caregiver signs up, their patients can get daily
        checkups, in the form of customized questionaires that only take a minute to complete.
        Once the patient completes their questionaire, the doctor or caregiver has a complete list
        of all the questions they have completed and what the responses are. Since the form is meant
        to be taken daily, doctors and caregivers can see how patients with severe
        conditions are faring. Depending on the condition that the patient has, the questionaire
        is customized to their needs. The doctor or caregiver will also recieve alerts if something
        which needs attention is entered
        in the form. In addition to how the patient is feeling, TITLE also asks
        about the patient's medications. The first time a patient goes to the questionaire, they
        have to fill out some background information about what medication they taking for their
        condition and when, during the week or day, they need to take it.
        The daily form asks what medications they have taken today and which ones they are going
        to take later in the day which supplements the information from the first form.
        This way, a caregiver or
        doctor can see if their patient is taking their medication. This tool revolutionizes and
        destigmatizes contact between doctor and patient.</p>

      <div class="buttonsAboutUs panel-footer row">
        <div class="previous">
          <div class="col-xs-6 text-left">
            <a href="/register" class="register button"><button class="btn btn-primary btn-xlarge spaceAbove button2">Register
              Now (Doctor/Caregiver)!</button></a>
          </div>
        </div>
        <div class="next">
          <div class="col-xs-6 text-right">
            <a href="" class="contactDoctor button"><button class="btn btn-primary btn-xlarge spaceAbove button2">Contact Your
              Doctor/Caregiver</button></a>
          </div>
        </div>
      </div>

    </div>


    <div class="howItWorks">
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
    </div>


    <div class="devLinks">
      <h2 class="sectionHeader">Dev links -</h2>
      <a href="/meds">meds</a>
      <a href="/daily">daily</a>
    </div>
  </div>
</section>
@endsection
