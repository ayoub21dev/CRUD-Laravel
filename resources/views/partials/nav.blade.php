<nav class="flex space-x-8">
  <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-indigo-600 font-semibold' : 'text-gray-500 hover:text-gray-900' }} px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">Accueil</a>
  <a href="{{ route('articles.index') }}" class="{{ request()->routeIs('articles.*') ? 'text-indigo-600 font-semibold' : 'text-gray-500 hover:text-gray-900' }} px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">Articles</a>
  <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-indigo-600 font-semibold' : 'text-gray-500 hover:text-gray-900' }} px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">À propos</a>
  <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-indigo-600 font-semibold' : 'text-gray-500 hover:text-gray-900' }} px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">Contact</a>

  @guest
    {{-- Links for guests (not logged in) --}}
    <a href="{{ route('login') }}" class="text-gray-500 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Connexion</a>
    <a href="{{ route('register') }}" class="text-gray-500 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Inscription</a>
  @else
    {{-- Links for logged-in users --}}
    <div class="flex items-center space-x-4">
        {{-- Link to Admin (visible for all logged-in users) --}}
        <a href="{{ route('admin.dashboard') }}"
           class="text-sm font-medium text-gray-700 hover:text-gray-900">
            Tableau de bord
        </a>

        {{-- User profile with badge --}}
        <div class="flex items-center space-x-3">
            <span class="text-sm text-gray-700">
                Bonjour, {{ Auth::user()->name }}
            </span>

            @if (Auth::user()->is_admin)
                <span class="inline-flex items-center rounded-full bg-red-600 px-2.5 py-0.5 text-xs font-semibold text-white">
                    Admin
                </span>
            @else
                <span class="inline-flex items-center rounded-full bg-sky-600 px-2.5 py-0.5 text-xs font-semibold text-white">
                    Auteur
                </span>
            @endif
        </div>

        {{-- Logout button --}}
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="text-gray-500 hover:text-red-600 text-sm font-medium">Déconnexion</button>
        </form>
    </div>
  @endguest
</nav>