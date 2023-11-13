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
                <div class="row mt-5">
                    <div class="col">
                        <div class="mb-3">
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <label for="comment" class="form-label">Commentary</label>
                            <textarea class="form-control" id="comment" rows="3" name="title"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-end">
                        <button class="btn btn-primary" type="submit">Add</button>
                    </div>
                </div>
                <div class="my-3 gap-2">
                    @isset($comments)
                        @foreach($comments as $comment)
                            @component('components.children-comment-component', ['comment'=> $comment]);@endcomponent
                        @endforeach
                    @endisset
                </div>
            </div>
        </form>
    </div>
</body>
</html>
