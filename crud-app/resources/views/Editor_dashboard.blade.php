<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h1>This is Editor dashboard</h1>

    <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
</body>
</html>
