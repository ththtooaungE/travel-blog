@props(['blogs'])
<div class="row mb-4">
    @forelse($blogs as $blog)
        <div class="col-4">
            <div class="p-2 my-4">
                <x-blog-card :blog="$blog"/>
            </div>
        </div>
    @empty
    <p class="text-center">No Blogs Found!</p>
    @endforelse

    {{$blogs->links()}}

</div>
