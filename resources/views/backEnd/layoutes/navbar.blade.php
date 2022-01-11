<!--start-Navbar-->
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
        <div class= "container">
          {{-- <h1> {{ url()->current() }} </h1> --}}
          <h1>
              {{-- href="{{route('patien.homepage',$patient->id)}}" --}}
              @php
                  $href= route( 'indexRoute' );
                  // if(){
                      $id = 0;
                      if (str_contains( url()->current() , '/dashbord/patien/')) {
                          if(Session::has('PatientLogged')){
                              $id = Session::get('PatientLoggedID');
                          }
                          $href= route('patien.homepage', $id );
                      }
                      elseif(str_contains( url()->current() , '/dashbord/online_doctor/')) {
                          if(Session::has('OnlineDoctorLoggedID')){
                              $id = Session::get('OnlineDoctorLoggedID');
                          }
                          $href= route('online_doctor.homepage', $id );

                      }
                  // }
              @endphp
          </h1>
          {{-- <h1>{{ $route }}</h1> --}}
          <a href= {{ $href }} class="row" style="text-decoration:none">
            <img class="ml-2" src="{{url('imgs/logo.svg')}}" width="60" alt="Responsive image">
            <h3 class="h3 ml-lg-3 mt-2 font-weight-bold text-uppercase " >Patient Medical History</h3>
          </a>


          {{-- </a> --}}
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
            <div>
              @if(config('app.locale') == 'en')
              <a rel="alternate" href="{{LaravelLocalization::getLocalizedURL('ar') }}" class=" float-right Lang form-control col-3 btn my-2 my-sm-0">العربيه</a><div class="toggle_container"><div class="block"></div></div>
                @else
                <a rel="alternate" href="{{LaravelLocalization::getLocalizedURL('en') }}" class=" float-right Lang form-control col-3 btn my-2 my-sm-0">English</a><div class="toggle_container"><div class="block"></div></div>
                @endif
            </div>
              <button class=" float-right getapp form-control col-3 btn p-2">Get App</button>
            </div>
            </div>
          </div>
        </div>
      </nav>
</div>
<!--End-Navbar-->
