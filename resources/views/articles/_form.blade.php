@csrf

<div style="margin-bottom:.75rem;">
  <label for="title">Titre</label>
  <input id="title" name="title" type="text" value="{{ old('title') }}" style="width:100%;padding:.5rem;border:1px solid #ccc;">
  @error('title')
    <div style="color:#b91c1c;font-size:.875rem;">{{ $message }}</div>
  @enderror
</div>

<div style="margin-bottom:.75rem;">
  <label for="slug">Slug</label>
  <input id="slug" name="slug" type="text" value="{{ old('slug') }}" style="width:100%;padding:.5rem;border:1px solid #ccc;">
  @error('slug')
    <div style="color:#b91c1c;font-size:.875rem;">{{ $message }}</div>
  @enderror
</div>

<div style="margin-bottom:.75rem;">
  <label for="content">Contenu</label>
  <textarea id="content" name="content" rows="6" style="width:100%;padding:.5rem;border:1px solid #ccc;">{{ old('content') }}</textarea>
  @error('content')
    <div style="color:#b91c1c;font-size:.875rem;">{{ $message }}</div>
  @enderror
</div>

