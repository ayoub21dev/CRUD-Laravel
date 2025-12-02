@extends('layouts.app')

@section('content')
  <div class="overflow-hidden bg-white shadow sm:rounded-lg">
    <div class="px-4 py-5 sm:px-6">
      <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $article['title'] }}</h3>
      <p class="mt-1 max-w-2xl text-sm text-gray-500">Détails de l'article</p>
    </div>
    <div class="border-t border-gray-200">
      <dl>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">Auteur</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $article['author'] ?? 'N/A' }}</dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">Slug</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
            <code class="text-sm font-bold text-gray-900">{{ $article['slug'] }}</code>
          </dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">Vues</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ $article['views'] ?? 0 }}</dd>
        </div>
      </dl>
    </div>
    <div class="bg-gray-50 px-4 py-3 sm:px-6">
      <a href="{{ route('articles.index') }}" class="text-indigo-600 hover:text-indigo-900 font-medium">← Retour à la liste</a>
    </div>
  </div>
@endsection
