 <div class="container-fluid px-0">
          <nav class="navbar navbar-expand-lg navbar-light bg-white inner-nav-profile">
            <div class="brand-left sidebar-bg">
              <a class="navbar-brand text-white" href="{{route('home')}}">Samcom</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div  class="collapse navbar-collapse  m-auto inner-nav-bg" id="navbarTogglerDemo03">
              <ul class="navbar-nav">
                <li class="nav-item dropdown" style="width: 100%; text-align: right;">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>
                  

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a  class="dropdown-item" href="{{route('profile')}}" >
                          My Profile <span class="caret"></span>
                      </a>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>