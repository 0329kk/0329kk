<h1>New Products</h1>

<form method="POST" action="/products">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">商品名</label>
        <input type="text" name="name">
    </div>
    <div class="form-group">
        <label for="description">商品概要</label>
        <textarea name="description" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label for="number">値段</label>
        <input type="number" name="price">
    </div>
    <select name="category_id" class="form-group">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <button type="submit">Create</button>
</form>

<a href="/products">Back</a>

{{--<h1>New Products</h1>--}}

{{--{{ Form::open(['route' => 'products.create']) }}--}}
{{--    {{Form::token()}}--}}
{{--    <div class="form-group">--}}
{{--        {{ Form::label('name', '商品名:') }}--}}
{{--        {{ Form::text('name', null) }}--}}
{{--    </div>--}}
{{--    <div class="form-group">--}}
{{--        {{ Form::label('description', '商品概要') }}--}}
{{--        {{ Form::text('description', null) }}--}}
{{--    </div>--}}
{{--    <div class="form-group">--}}
{{--        {{ Form::label('number', '値段') }}--}}
{{--        {{ Form::number('number', null) }}--}}
{{--    </div>--}}
{{--    <div class="form-group">--}}
{{--        {{ Form::submit('新規追加', ['class' => 'btn btn-outline-primary']) }}--}}
{{--    </div>--}}
{{--{{ Form::close() }}--}}

{{--<a href="/products">Back</a>--}}
