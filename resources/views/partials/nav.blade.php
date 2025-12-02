<nav class="flex space-x-8">
  <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-indigo-600 font-semibold' : 'text-gray-500 hover:text-gray-900' }} px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">Accueil</a>
  <a href="{{ route('articles.index') }}" class="{{ request()->routeIs('articles.*') ? 'text-indigo-600 font-semibold' : 'text-gray-500 hover:text-gray-900' }} px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">Articles</a>
  <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-indigo-600 font-semibold' : 'text-gray-500 hover:text-gray-900' }} px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">À propos</a>
  <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-indigo-600 font-semibold' : 'text-gray-500 hover:text-gray-900' }} px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">Contact</a>

  @guest
    <a href="{{ route('login') }}" class="{{ request()->routeIs('login') ? 'text-indigo-600 font-semibold' : 'text-gray-500 hover:text-gray-900' }} px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">Connexion</a>
    <a href="{{ route('register') }}" class="{{ request()->routeIs('register') ? 'text-indigo-600 font-semibold' : 'text-gray-500 hover:text-gray-900' }} px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">Inscription</a>
  @else
    <div class="relative flex items-center ml-4">
      <span class="text-gray-700 text-sm font-medium mr-4">{{ Auth::user()->name }}</span>
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="text-gray-500 hover:text-red-600 px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">Déconnexion</button>
      </form>
    </div>
  @endguest
</nav>
