<header class="container">
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link {{ (Route::currentRouteName() === 'home') ? 'active' : '' }} " aria-current="page" href="{{ route('home') }} ">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ (Route::currentRouteName() === 'contacts') ? 'active' : '' }}" href="{{ route('contacts') }} ">Contact us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ (Route::currentRouteName() === 'about') ? 'active' : '' }} " href="{{ route('about') }} ">About us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ (Route::currentRouteName() === 'movies') ? 'active' : '' }} " href="{{ route('movies') }} ">Movies</a>
    </li>
  </ul>
</header>