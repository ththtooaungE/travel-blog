@props(['blog'])
<a href="/blogs/{{$blog->slug}}" class="text-decoration-none">
    <p class="h4 text-dark">{{$blog->title}}</p>
    <!-- category -->
    @foreach($blog->category as $category)
    <a class="text-white" 
        href="/?category={{$category->slug}}"><span class="badge bg-success p-2">{{$category->name}}</span></a>
    @endforeach

    <!-- image -->
    <div style="position: relative;" class="mt-2">
        <img src="/images/bagan-burma-myanmar.jpg" class="rounded" style="width: 100%;object-fit:cover;" alt="blog picture">
        <div style="position: absolute; top:10px; left:10px; right:10px; font-size:18px;">
            <mark>{{substr($blog->body,0,80)}}</mark>
        </div>
    </div>
</a>
