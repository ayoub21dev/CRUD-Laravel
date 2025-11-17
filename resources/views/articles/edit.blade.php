@extends('layouts.app')

@section('content')
  <h1>Modifier : {{ $article->title }}</h1>

  @if ($errors->any())
    <div style="background:#fef2f2;border:1px solid #fecaca;padding:.75rem;margin-bottom:1rem;border-radius:.25rem;">
      <strong>Veuillez corriger les erreurs suivantes :</strong>
      <ul style="margin:.5rem 0 0 1rem;">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form method="POST" action="{{ route('articles.update', $article) }}" novalidate>
    @method('PUT')
    @include('articles._form')
    <button type="submit" style="padding:.5rem 1rem;background:#111;color:#fff;border:none;">Enregistrer</button>
  </form>
@endsection
