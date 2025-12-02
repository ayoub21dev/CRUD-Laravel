@csrf

<div class="space-y-6">
  <div>
    <label for="title" class="block text-sm font-medium text-gray-700">Titre</label>
    <div class="mt-1">
      <input type="text" name="title" id="title" value="{{ old('title', $article->title ?? '') }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Titre de l'article">
    </div>
    @error('title')
      <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
  </div>

  <div>
    <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
    <div class="mt-1">
      <input type="text" name="slug" id="slug" value="{{ old('slug', $article->slug ?? '') }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="slug-de-l-article">
    </div>
    @error('slug')
      <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
  </div>

  <div>
    <label for="content" class="block text-sm font-medium text-gray-700">Contenu</label>
    <div class="mt-1">
      <textarea id="content" name="content" rows="6" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Contenu de l'article">{{ old('content', $article->content ?? '') }}</textarea>
    </div>
    @error('content')
      <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
  </div>
</div>

