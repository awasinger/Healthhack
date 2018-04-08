@extends('layouts.app')
@section('content')
<div class="container">
  <h2>Frank Jones</h2>
  <table class="table">
    <tr>
      <th>Question</th>
      <th>Answer</th>
      <th>Day</th>
    </tr>
    <tr>
      <td class="text-truncate">What medications have you taken today:</td>
      <td class="text-truncate">Insulin after breakfast and lunch</td>
      <td class="text-truncate">4/7/2018</td>
    </tr>
    <tr>
      <td class="text-truncate">What medications will you take later today:</td>
      <td class="text-truncate">Insulin after diner</td>
      <td class="text-truncate">4/7/2018</td>
    </tr>
    <tr>
      <td class="text-truncate">Did you/will you have an unusual amount of sugar today:</td>
      <td class="text-truncate">Yes</td>
      <td class="text-truncate">4/7/2018</td>
    </tr>
    <tr>
      <td class="text-truncate">Do you have your insulin on you:</td>
      <td class="text-truncate">No</td>
      <td class="text-truncate">4/7/2018</td>
    </tr>
    <tr>
      <td class="text-truncate">What is your glucose level:</td>
      <td class="text-truncate">105</td>
      <td class="text-truncate">4/7/2018</td>
  </table>
</div>
@endsection
