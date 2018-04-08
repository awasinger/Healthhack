@extends('layouts.app')
@section('content')
<section>
  <div class="containerHomePage container">


    <div class="aboutUs">

      <h2 class="sectionHeader">About Us</h2>
      <p class="info">TITLE is a way for doctors and patients to check in with each other on a daily basis. Once a doctor or signs up, their patients will receive a form that only takes a minute to complete. Since the form is meant to be taken daily, doctors and can closely monitor how patients with severe conditions are faring. For example if a doctor is worrying about a patient with bipolar depression, they are able to review how the patient responded to the personalized questionaire and see the state he or she is in. The doctor will also recieve alerts if a patient enters a serious problem on the form, such as severe heart palpatations in a patient with hypertension. The daily form asks how the patient is feeling as well as what medications they are currently taking. This way, a doctor can stay informed about how their patients are doing and when medications are being taken. This tool revolutionizes and destigmatizes contact between the doctor and the patient.

</p>


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
