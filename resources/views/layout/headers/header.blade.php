<header>
    @include('layout.headers.topHeader')
    <nav class="navbar navbar-expand-lg navigation bg-light mb-5" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="/">
                {{-- <img src="images/logo.png" alt="" class="img-fluid"> --}}
                <h1 style="font-family: 'Acme', sans-serif">ROGILIPY</h1>
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
                aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icofont-navigation-menu"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarmain">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About</a></li>

                    @if($role == 'admin' || $role == 'patient')
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Department <i class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown02">
                            <li><a class="dropdown-item" href="{{route('medicine.index')}}">Medicine</a></li>
                            @if($role == 'admin')
                            <li>
                                <a class="dropdown-item" href="{{route('patientList')}}">Patients List</a>
                            </li>
                            @endif
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Doctors <i class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown03">
                            <li><a class="dropdown-item" href="{{route('doctor.index')}}">Doctors List</a></li>
                            <li><a class="dropdown-item" href="{{route('appointment.index')}}">Appointment</a></li>
                            <li><a class="dropdown-item" href="{{route('suggestMedicine.index')}}">Suggest Medicine</a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                    @if ($role == 'admin' || $role == 'patient')
                    <li class="nav-item"><a class="nav-link" href="{{route('signOut')}}">Sign Out</a></li>
                    @else
                    <li class="nav-item"><a class="nav-link" href="{{route('signIn')}}">Sign In</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('signUp')}}">Sign Up</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
