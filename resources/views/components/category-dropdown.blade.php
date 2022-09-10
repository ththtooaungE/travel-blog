<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    <button class="btn btn-outline-light nav-link dropdown-bs-toggle text-white" 
    href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" style="min-width:120px"
        >{{$currentCategory ? $currentCategory->name : 'Category'}}</button>
    <div class="dropdown-menu" style="background-color: #b3ced8;" aria-labelledby="navbarDropdown">
        @foreach($categories as $category)
        <a class="dropdown-item" style="color: #1A385A" href="/?category={{$category->slug}}">{{$category->name}}</a>
        @endforeach
        
    </div>
</div>