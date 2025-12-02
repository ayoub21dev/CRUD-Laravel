@extends('layouts.app')

@section('content')
  <div class="bg-white shadow sm:rounded-lg">
    <div class="px-4 py-5 sm:p-6">
      <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $title }}</h3>
      <div class="mt-2 max-w-xl text-sm text-gray-500">
        <p>Bienvenue sur le blog ! Consultez la liste des articles pour découvrir nos derniers contenus.</p>
      </div>
      <div class="mt-5">
        <a href="{{ route('articles.index') }}" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
          Voir les articles
        </a>
      </div>
    </div>
  </div>
@endsection
