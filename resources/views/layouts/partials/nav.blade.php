<nav>
    <h1 class="visually-hidden">Employee Management</h1>
    <div class="container">
        <header class="d-flex justify-content-center border-bottom mb-4 flex-wrap py-3"> <a href="/"
                class="d-flex align-items-center mb-md-0 me-md-auto link-body-emphasis text-decoration-none mb-3">
                <svg class="bi me-2" width="40" height="32" aria-hidden="true">
                    <use xlink:href="#bootstrap"></use>
                </svg> <span class="fs-4">Employee Management</span> </a>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link active" aria-current="page">Home</a>
                </li>
                <li class="nav-item"><a href="{{ route('employee.index') }}" class="nav-link">Employee</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
            </ul>
            <div class="dropdown">
                <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Auth Button
                </a>

                <ul class="dropdown-menu">
                    @if (!Auth::check())
                        <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                        <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                    @else
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                    @endif
                </ul>
            </div>
        </header>
    </div>
</nav>
