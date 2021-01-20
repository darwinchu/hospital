<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">
            <img src="https://via.placeholder.com/170x38" alt="logo" /> </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="https://via.placeholder.com/40x40" alt="logo" /> </a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
        <!-- Settings Dropdown -->
        <div class="hidden sm:flex sm:items-center sm:ml-6 navbar-nav ml-auto">
            {{-- <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                        <div>{{ Auth::user()->name }}</div>

                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Logout') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
 --}}
			<div class="dropdown">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					{{ Auth::user()->name }}
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<form method="POST" action="{{ route('logout') }}">
                        @csrf
						<a class="dropdown-item" href="javascript:void(0)" onclick="this.closest('form').submit();">Logout</a>
                    </form>

				</div>
			</div>
        </div>
    </div>
</nav>