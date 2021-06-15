<header id="header" class="fixed-top">
    <div class="container-fluid d-flex">

        <div class="logo mr-auto">
            <a href="{{ route('homepage') }}"><img src="{{ asset('frontend/img/icons/skilldemy.png') }}"
                    class="img-fluid animated" alt="Logo"></a>

        </div>

        
        @include('site.partials.nav')

    </div>

</header>
