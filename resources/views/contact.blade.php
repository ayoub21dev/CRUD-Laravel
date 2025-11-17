@extends('layouts.app')

@section('content')
<div class="card">
    <h2>{{ $title }}</h2>

    <form method="POST" action="#">
        @csrf
        <label for="name">Nom :</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required>

        <label for="message">Message :</label>
        <textarea name="message" id="message" required></textarea>

        <button type="submit">Envoyer</button>
    </form>
</div>
@endsection
