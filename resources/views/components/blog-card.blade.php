@props(['blog'])
<a href="/blogs/{{$blog->slug}}" class="text-decoration-none">
    <p class="h4 text-dark">{{$blog->title}}</p>
    <!-- category -->
    @foreach($blog->categories as $category)
    <a class="text-white" 
        href="/?category={{$category->slug}}{{request('search')
            ? '&search='.request('search') : ''}}{{request('distination') 
            ? '&distination='.request('distination') : ''}}"><span class="badge bg-success p-2">{{$category->name}}</span></a>
    @endforeach

    <!-- image -->
    <a href="/blogs/{{$blog->slug}}">
        <div style="position: relative;" class="mt-2">
            <img src="/storage/{{$blog->image}}" class="rounded" 
                style="width:400px;height:300px;object-fit:cover;" alt="blog picture">
            <div style="position: absolute; top:10px; left:10px; right:10px; font-size:18px;" class="text-dark">
            <mark>{!!substr(str_replace('<p>','',$blog->body),0,80)!!}...</mark>
            </div>
        </div>
    </a>
</a>
