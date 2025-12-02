@extends('layouts.app')

@section('content')
  <div class="bg-white shadow sm:rounded-lg">
    <div class="px-4 py-5 sm:p-6">
      <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $title }}</h3>
      <div class="mt-5 md:col-span-2 md:mt-0">
        <form method="POST" action="#">
          @csrf
          <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-4">
              <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
              <input type="text" name="name" id="name" autocomplete="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <div class="col-span-6 sm:col-span-4">
              <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
              <input type="email" name="email" id="email" autocomplete="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <div class="col-span-6">
              <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
              <div class="mt-1">
                <textarea id="message" name="message" rows="3" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
              </div>
            </div>
          </div>
          <div class="mt-6">
            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
              Envoyer
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
