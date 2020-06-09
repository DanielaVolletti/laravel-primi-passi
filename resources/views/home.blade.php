@extends('mainLayout')

@section('content')
  <div class="first-section-home">
    <div class="novita">
      <h2>Novità in libreria</h2>
      <div class="new-libreria">
        <img src="https://www.einaudi.it/content/uploads/2020/06/978880624680GRA-192x300.jpg" alt="">
        <img src="https://www.einaudi.it/content/uploads/2020/06/978880624408GRA-189x300.jpg" alt="">
        <img src="https://www.einaudi.it/content/uploads/2020/06/978880623687GRA-189x300.jpg" alt="">
      </div>
    </div>
    <div class="piu-venduti">
      <h2>I più venduti</h2>
      <ul>
        <li>Francesco Piccolo <span>Momenti Trascurabili Vol 3</span></li>
        <li>Matteo Bussola <span>L'invenzione di noi 2</span></li>
        <li>Federico Rampini <span>Oriente e Occidente</span></li>
        <li>Giancarlo De Cataldo <span>Io sono il castigo</span></li>
        <li>Gianrico Carofiglio <span>La misura del tempo</span></li>
      </ul>
    </div>
  </div>
@endsection
