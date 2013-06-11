<!DOCTYPE html>

@include('admin._partials.head')

<body>
<div class="row">
    <div class="twelve columns">

        @include('admin._partials.navigation')

        <div class="row">

            @yield('main')

        </div>


        @include('admin._partials.footer')

    </div>
</div>

@include('admin._partials.js')

</body>
</html>
