<!-- Navigation -->

<div class="row">
    <div class="twelve columns">

        <nav class="top-bar">
            <ul class="top-bar">
                <li class="name">{{ HTML::link('admin/main', 'Logo') }}</li>
                <li class="name"><h1>{{ HTML::link('admin/main', 'Admin') }}</h1></li>
                <li class="toggle-topbar"><a href="#"></a></li>
            </ul>

            <section>
                <ul class="left">
                    <li>{{ HTML::link('admin/player/index', 'Player') }}</li>
                </ul>

                <ul class="right">

                    @if(Sentry::check())

                        <li class="has-dropdown">
                            <a href="#">Hi, {{ Sentry::getUser()->first_name }}</a>

                            <ul class="dropdown">
                                <li>{{ HTML::link('admin/user/'.Sentry::getUser()->id.'/edit', 'Change profile') }}</li>
                                <li>{{ HTML::link('admin/logout', 'Logout') }}</li>
                            </ul>

                        </li>
                    @endif

                </ul>
            </section>
        </nav>

    </div>
</div>

<!-- End Navigation -->