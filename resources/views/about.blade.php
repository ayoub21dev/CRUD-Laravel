@extends('layouts.app')

@section('content')
  <div class="bg-white shadow sm:rounded-lg">
    <div class="px-4 py-5 sm:p-6">
      <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $title }}</h3>
      <div class="mt-2 max-w-xl text-sm text-gray-500">
        <p>Ce projet a pour but d’apprendre le modèle MVC avec Laravel et de préparer la mise en place du CRUD.</p>
      </div>
    </div>
  </div>
@endsection
