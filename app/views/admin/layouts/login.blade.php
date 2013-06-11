<!DOCTYPE html>

@include('admin._partials.head')

<body>
<div class="row">
    <div class="twelve columns">

        <div class="row">

            @yield('main')

        </div>


    </div>
</div>

@include('admin._partials.js')

</body>
</html>
