<nav class="container navbar navbar-expand-lg navbar-light bg-white border-bottom">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <x-application-logo class="h-9" />
        </a>

        <!-- Toggle button for mobile view -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Links -->
        <div class="collapse navbar-collapse gap-4 justify-content-end" id="navbarNav">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="nav-link">
                        {{ __('Home') }}
                    </x-nav-link>
                </li>
                @hasanyrole(['admin'])
                <li class="nav-item">
                    <x-nav-link href="#" class="nav-link">
                        {{ __('Admins') }}
                    </x-nav-link>
                </li>
                @endhasanyrole
                @hasanyrole(['admin', 'hr', 'employee'])
                <li class="nav-item">
                    <x-nav-link href="#" class="nav-link">
                        {{ __('About') }}
                    </x-nav-link>
                </li>
                @endhasanyrole
                @hasanyrole(['admin', 'hr', 'employee'])
                <li class="nav-item">
                    <x-nav-link href="#" class="nav-link">
                        {{ __('Task') }}
                    </x-nav-link>
                </li>
                @endhasanyrole
                @hasanyrole(['admin'])
                <li class="nav-item">
                    <x-nav-link href="#" class="nav-link">
                        {{ __('HR') }}
                    </x-nav-link>
                </li>
                @endhasanyrole
                @hasanyrole(['admin', 'hr'])
                <li class="nav-item">
                    <x-nav-link href="#" class="nav-link">
                        {{ __('Employee') }}
                    </x-nav-link>
                </li>
                @endhasanyrole
                @hasanyrole(['admin', 'hr', 'employee'])
                <li class="nav-item">
                    <x-nav-link href="#" class="nav-link">
                        {{ __('Contact') }}
                    </x-nav-link>
                </li>
                @endhasanyrole
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-nav-link :href="route('profile.edit')" class="dropdown-item">
                        {{ __('Profile') }}
                        </x-nav-link>
                    </form>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="dropdown-item">
                            {{ __('Logout') }}
                        </x-nav-link>
                    </form>
                </li>
            </ul>

            <!-- User Profile Dropdown -->
            <div class="dropdown">
                <button class="btn btn-secondary" type="button" id="userDropdown" >
                    {{ Auth::user()->name }}
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Add Bootstrap JS at the end of your body -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
