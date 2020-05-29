<div class="row justify-content-md-center">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="./images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                {{ config('app.name', 'Applab') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('getAboutPage') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('getSupportPage') }}">Support</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('getContactPage') }}">Contact</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</div>