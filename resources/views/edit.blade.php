<h1>Update Products</h1>

<form method="POST" action="/products/{{ $product->id }}">
    {{ csrf_field() }}
    <div class="form-group">
        <input type="hidden" name="_method" value="PUT">
    </div>
    <div class="form-group">
        <input type="text" name="name" value="{{ $product->name }}">
    </div>
    <div class="form-group">
        <textarea name="description" cols="30" rows="10">{{ $product->description }}</textarea>
    </div>
    <div class="form-group">
        <input type="number" name="price" value="{{ $product->price }}">
    </div>
    <select name="category_id" class="form-group">
        @foreach ($categories as $category)
            @if ($category->id == $product->category_id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
        @endforeach
    </select>
    <button type="submit">Update</button>
</form>

<a href="/products">Back</a>
