@extends('layouts.app')

@section('content')
<div class="row">
      <div class="medium-12 large-12 columns">
        <h4>Clients/Booking</h4>
        <div class="medium-2  columns">BOOKING FOR:</div>
        <div class="medium-2  columns"><b>{{ $client->title }}. {{ $client->name}}</b></div>
        <form action="" method="post">
        <input type="hidden" name="_token" value="qbuQgVOYJ0tkLX6OPq5gYGJXqPG0Pke7VfuRXF53">
          <div class="medium-1  columns">FROM:</div>
          <div class="medium-2  columns"><input name="dateFrom" value="" type="text" class="datepicker" /></div>
          <div class="medium-1  columns">TO:</div>
          <div class="medium-2  columns"><input name="dateTo" value="" type="text" class="datepicker" /></div>
          <div class="medium-2  columns"><input class="button" type="submit" value="SEARCH" /></div>
        </form>

        <table class="stack">
          <thead>
            <tr>
              <th width="200">Room</th>
              <th width="200">Availability</th>
              <th width="200">Action</th>
            </tr>
          </thead>
            @foreach( $rooms as $room )
          <tbody>
                      <tr>
              <td>101</td>
              <td>
                <div class="callout success">
                    <h7>Available</h7>
                </div>
              </td>
              <td>
                <a class="hollow button warning" href="./clients.html">BOOK NOW</a>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
@endsection
