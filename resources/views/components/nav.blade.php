<nav class="navbar navbar-expand-lg navbar-light p-2 justify-content-between shadow" style="background-color: #598EC2;">
    <div class="collapse navbar-collapse">
        <a class="navbar-brand pb-2  text-white" style="font-size: 28px;" href="/">Travelling Blog</a>
        <form class="form-inline my-2 my-lg-0 d-flex"
            action="/" method="GET">
            <input name="search" class="form-control" type="search"
             placeholder="Search" value="{{request('search') ?? ''}}">
            @if(request('category'))
            <input type="hidden" name="category" value="{{request('category')}}">
            @endif
            <button class="btn btn-light mx-1" type="submit">Search</button>
        </form>
    </div>
    <div>
        <div class="collapse navbar-collapse" style="font-size: 20px;">
            <ul class="navbar-nav">
                <li class="nav-item active mx-2" style="width:120px">
                    <a class="nav-link text-white btn btn-outline-light" href="#">Home</a>
                </li>
                <li class="nav-item active mx-2" style="width:120px">
                    <a class="nav-link text-white btn btn-outline-light" href="#">Distination</a>
                </li>
                
                <li class="nav-item dropdown mx-2">
                    <x-category-dropdown />
                </li>
                <li class="nav-item active mx-2" style="width:120px">
                    <a class="nav-link text-white btn btn-outline-light" href="#">About</a>
                </li>                    
            </ul>   
        </div>
    </div>
</nav>