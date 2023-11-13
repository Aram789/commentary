<div class="container">
    <div class="my-3 gap-2 p-2">
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
                @component('components.children-comment-component', ['comment'=> $comment]);@endcomponent
            @endforeach
        @endif
    </div>
</div>
