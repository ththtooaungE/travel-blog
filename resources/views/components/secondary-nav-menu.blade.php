@props(['blogs'])
<div class="card p-3 m-2 text-center text-light shadow-sm border-0" 
    style="font-size:20px;background-color: #598EC2;">Distinations in Myanmar</div>

<div class="row">
    @foreach($blogs as $blog)
    <x-blog-card :blog="$blog" />
    @endforeach
</div>

<div class="d-flex justify-content-end p-2 mb-4">
    <a href="" class="btn" style="background-color: #769ABE;">More</a>
</div>