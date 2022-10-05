@props(['comments'])
<div class="col-md-10 mx-auto">
    <h5 class="my-3 text-secondary">Comments ({{$comments->count()}})</h5>
    @foreach ($comments as $comment)
    <div class="d-flex">
        <div>
            <img src="/storage/{{$comment->author->avatar}}" width="50" height="50" class="rounded-circle" alt="">
        </div>
        <div class="ms-3">
            <h6>{{$comment->author->name}}</h6>
            <p class="text-secondary">{{$comment->created_at->diffForHumans()}}</p>
        </div>
    </div>
    <p>{{$comment->body}}</p>
    @endforeach
    {{$comments->links()}}
</div>