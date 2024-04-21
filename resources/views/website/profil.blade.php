@include('layouts.template')
Bonjour {{session ('utilisateur')->name}}

<br />

@if (session('error'))
        <a href="#"class="bottom-text-w3ls">{{ session('error') }} </a>
    @endif
