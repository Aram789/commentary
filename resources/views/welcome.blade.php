<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="container">
    <form action="{{route('home.store')}}" method="post">
        <div>
            @csrf
            <div class="p-3 mt-5 fixed d-flex align-items-center">
                <div class="col">
                    <div class="mb-3">
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <label for="comment" class="form-label">Commentary</label>
                        <textarea class="form-control" id="comment" rows="1" name="title" autofocus></textarea>
                    </div>
                </div>
                <div class="col text-end">
                    <button class="btn btn-primary" type="submit">Add Comment</button>
                </div>
            </div>
            <div class="my-3 gap-2">
                @isset($comments)
                    @foreach($comments as $comment)
                        <div class="bg-light rounded">
                            <div class="bg-light p-3 d-flex align-items-center justify-content-between">
                                <strong class="fs-4 bg-warning px-1 rounded"> Parent
                                    comment: {{$comment->title}}</strong>
                                <div class="text-end">
                                    <label for="children{{$comment->id}}" class="btn btn-primary">
                                        Add Comment
                                        <input type="submit" name="children_id" value="{{$comment->id}}"
                                               class="btn btn-primary" id="children{{$comment->id}}" hidden>
                                    </label>
                                </div>
                            </div>
                            <hr>
                            @component('components.children-comment-component', ['comment'=> $comment]);@endcomponent
                        </div>
                    @endforeach
                @endisset
            </div>
        </div>
    </form>
</div>
</body>
</html>
