
<header class="bg-dark">

    <nav class="nav justify-content-center">
        <a class="nav-link {{Route::currentRouteName() === 'home' ? 'bg-primary text-white' : ''}}" href="{{route('home')}}" aria-current="page">Home</a>
        <a class="nav-link {{Route::currentRouteName() === 'about' ? 'bg-primary text-white' : ''}}" href="{{route('about')}}" href="/about">About</a>
        <a class="nav-link {{Route::currentRouteName() === 'contacts' ? 'bg-primary text-white' : ''}}" href="{{route('contacts')}}" href="/contacts">Contacts</a>
    </nav>
    
</header>