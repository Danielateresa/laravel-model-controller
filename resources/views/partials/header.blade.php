<header>
    <nav class="bg-dark d-flex justify-content-center px-2">
        <ul class="text-uppercase d-flex justify-content-center text-white mb-0" id="navId">
            <li>
                <a href="{{route('welcome')}}"
                    class="nav-link {{Route::currentRouteName() === 'welcome' ? 'active' : ''}}" aria-current="page">our
                    movies</a>
            </li>
            <li>
                <a href="{{route('about')}}"
                    class="nav-link {{Route::currentRouteName() === 'about' ? 'active' : ''}}">about us</a>
            </li>
            <li>
                <a href="#" class="nav-link">Contacts</a>
            </li>
        </ul>

        <button class="btn bg-light ms-auto me-4 rounded-0">Search</button>
    </nav>

</header>