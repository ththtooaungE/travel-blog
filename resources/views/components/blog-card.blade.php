@props(['blog'])
<div class="col-4">
    <div class="p-2">
        <div style="position: relative;">
            <img src="/images/bagan-burma-myanmar.jpg" class="rounded" style="width: 100%;object-fit:cover;" alt="blog picture">
            <div style="position: absolute; top:10px; left:10px; right:10px; font-size:18px;">
                <a href="{{$blog->slug}}" class="text-decoration-none">
                    <mark>{{$blog->body}}</mark>
                </a>
            </div>
        </div>
    </div>
</div>