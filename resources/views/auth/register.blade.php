@extends('layouts.app')

@section('content')
<div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-md">
    <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Inscription</h2>
    <p class="mt-2 text-center text-sm text-gray-600">
      Ou
      <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500">connectez-vous à votre compte</a>
    </p>
  </div>

  <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
    <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
      <form class="space-y-6" action="{{ route('register') }}" method="POST">
        @csrf

        <div>
          <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
          <div class="mt-1">
            <input id="name" name="name" type="text" autocomplete="name" required value="{{ old('name') }}" class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
          </div>
          @error('name')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Adresse email</label>
          <div class="mt-1">
            <input id="email" name="email" type="email" autocomplete="email" required value="{{ old('email') }}" class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
          </div>
          @error('email')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
          <div class="mt-1">
            <input id="password" name="password" type="password" autocomplete="new-password" required class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
          </div>
          @error('password')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="password-confirm" class="block text-sm font-medium text-gray-700">Confirmer le mot de passe</label>
          <div class="mt-1">
            <input id="password-confirm" name="password_confirmation" type="password" autocomplete="new-password" required class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
          </div>
        </div>

        <div>
          <button type="submit" class="flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            S'inscrire
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
