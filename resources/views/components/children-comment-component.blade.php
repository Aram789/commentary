<div class="container">
    <div class="card my-3 gap-2 p-2">
        <div class="d-flex align-items-center justify-content-between">
            <strong class="fs-4 bg-warning px-1 rounded"> Parent comment: {{$comment->title}}</strong>
            <div class="text-end">
                <label for="children{{$comment->id}}" class="btn btn-primary">
                    Add
                    <input type="submit" name="children_id" value="{{$comment->id}}"
                           class="btn btn-primary" id="children{{$comment->id}}" hidden>
                </label>
            </div>
        </div>
        @if(count($comment->childrens))
            @foreach($comment->childrens as $comment)
                <div class="d-flex align-items-center justify-content-between my-2 bg-light rounded mx-4">
                    <strong class="d-block px-2 fs-6"> Children comment: {{$comment->title}}</strong>
                    <label for="children{{$comment->id}}" class="btn btn-success">
                        Add
                        <input type="submit" name="children_id" value="{{$comment->id}}"
                               class="btn btn-success" id="children{{$comment->id}}" hidden>
                    </label>
                </div>
            @endforeach
        @endif
    </div>
</div>
