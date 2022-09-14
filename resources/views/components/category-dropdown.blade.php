@props(['categories','currentCategory'])
<button class="btn btn-light nav-link dropdown-bs-toggle text-white" 
href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" style="min-width:100px;background-color: #1A385A;"
    >{{$currentCategory ? $currentCategory->name : 'Category'}}</button>
<div class="dropdown-menu" style="background-color: #b3ced8;" aria-labelledby="navbarDropdown">
    @foreach($categories as $category)
    <a class="dropdown-item" style="color: #1A385A" 
        href="/?category={{$category->slug}}{{request('search')
            ? '&search='.request('search') : ''}}{{request('distination') 
            ? '&distination='.request('distination') : ''}}">{{$category->name}}</a>
    @endforeach
    
</div>
