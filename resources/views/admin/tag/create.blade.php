<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>

    
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    
    <form action="{{isset($tag) ? route('tag.update', $tag->name) : route('tag.store') }}" method="POST">
    @csrf
    @if(isset($tag))
        @method('PUT')
    @endif
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="name" value="{{isset($tag) ? $tag->name : ''}}">
    <br>
    <input type="submit" value="submit">
    </form>



</body>
</html>