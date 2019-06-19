@extends('layout.home-layout')
    @section('content')

      <div class="details">
          <div class="img-container">
              <img src="{{$apartment->img_path}}">
          </div>
          <div class="details-middle">
              <div class="middle-left">
                <h4>{{$apartment->title}}</h4>
                <span>{{$apartment->title}}</span>
                <p>{{$apartment->description}}</p>
              </div>
              <div class="middle-right">
                  <ul>
                    <li>Rooms : {{ $apartment->rooms }}</li>
                    <li>Mq : {{ $apartment->mq }}</li>
                    <li>Beds : {{ $apartment->beds }}</li>
                    <li>Bathroom : {{ $apartment->bathroom }}</li>
                    <li>Wi-Fi : {{ $apartment->wi_fi }}</li>
                    <li>Parking Space : {{ $apartment->parking_space }}</li>
                    <li>Sauna : {{ $apartment->sauna }}</li>
                    <li>Pool : {{ $apartment->pool }}</li>
                  </ul>
              </div>
          </div>
          <div class="details-down">
              <div class="down-left">
                  <div class="map-container">
                     <div class="map">

                     </div>
                  </div>
              </div>
              <div class="down-right">
                  <h1>Scrivi al Proprietario</h1>
                  <form class="" action="{{route('send.mail', $apartment->user_id)}}" method="post">
                    @csrf
                    @method('POST')
                    <label for="title">Title:</label><br>
                    <input type="text" name="title" value=""><br>
                    <label for="title">Name:</label><br>
                    <input type="text" name="name" value=""><br>
                    <label for="title">Lastname:</label><br>
                    <input type="text" name="lastname" value=""><br>
                    <label for="title">Email:</label><br>
                    <input type="text" name="email" value=""><br>
                    <label for="description">Description:</label><br>
                    <textarea name="description" rows="8" cols="80"></textarea><br><br>
                    <button type="submit" name="button">Send</button>
                  </form>
              </div>
          </div>
      </div>

@stop
