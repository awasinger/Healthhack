@extends('layouts.app')
@section('content')
<section>
  <div class="containerHomePage container">


    <div class="aboutUs">

      <h2 class="sectionHeader">About us</h2>
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

      <div class="row">
        <div class="text-center col">
            <a href="/register" class="button"><button class="btn btn-primary btn-xlarge spaceAbove button2">REGISTER YOUR PATIENTS</button></a>
        </div>
        <div class="text-center col">
            <a href="" class="button"><button class="btn btn-primary btn-xlarge spaceAbove button2">CONTACT YOUR DOCTOR</button></a>
        </div>
      </div>

    </div>
  </div>
</section>
@endsection
