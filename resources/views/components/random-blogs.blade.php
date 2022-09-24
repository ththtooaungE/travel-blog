@props(['randomBlogs'])
<div class="row my-4 d-flex align-items-end">
    <div class="card h3 text-white p-3 m-2 mx-3 text-center shadow-sm" style="background-color: #1A385A;">You May Like</div>
    @foreach($randomBlogs as $blog)
        <div class="col-4">
            <div class="p-2 my-4">
                <x-blog-card :blog="$blog"/>
            </div>
        </div>
    @endforeach

</div>
