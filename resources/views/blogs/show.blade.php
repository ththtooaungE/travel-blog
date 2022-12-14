<x-layout>
    <div class="container">
        <div class="row mb-5">

            <!-- single blog -->
            <div class="col-8">
                <img src="/storage/{{$blog->image}}" width="100%" alt="blog picture">
                <h1 class="pt-2 m-2">{{$blog->title}}</h1>
                <p>written by <b>{{$blog->author->name ?? 'unknown'}}</b></p>
                <p>{{$blog->created_at->diffForHumans()}}</p>
                @auth
                <form action="/blogs/{{$blog->slug}}/suscribe" method="POST">
                    @csrf
                    <button type="submit" class="btn {{auth()->user()->isSubscribed($blog) ? 'btn-danger' : 'btn-primary'}} mb-2">{{auth()->user()->isSubscribed($blog) ? 'Unsuscribe' : 'Suscribe'}}</button>
                </form>
                @endauth
                <div>
                    @foreach($blog->categories->map(function($category){return $category->name;}) as $category)
                    <a class="text-white" href=""><span class="badge bg-success p-2">{{$category}}</span></a>
                    @endforeach
                    @if($blog->distination)
                    <a class="text-white" href="/?distination={{$blog->distination->slug}}{{request('search')
                        ? '&search='.request('search') : ''}}{{request('category') 
                        ? '&category='.request('category') : ''}}">
                        <span class="badge bg-success p-2">{{$blog->distination->name}}</span>
                    </a>
                    @endif
                </div>
                <p>{!!$blog->body!!}</p>

                <x-comment-form :blog="$blog" />
                <x-comments :comments="$blog->comments()->latest()->paginate(4)"></x-comments>
            </div>

            <!-- distinations -->
            <div class="col-4 p-4">
                <x-distination-dropdown-wrapper>
                    <x-distination-dropdown class="flex-column" :blog="$blog" />
                </x-distination-dropdown-wrapper>
            </div>

            <x-random-blogs :randomBlogs="$randomBlogs" />
        </div>
    </div>
</x-layout>