<nav class="navbar navbar-expand-lg navbar-light p-2 justify-content-between shadow" style="background-color: #598EC2;">
    
    <div class="collapse navbar-collapse">
        <a class="navbar-brand pb-2 px-3 mx-3 text-white" style="font-size: 28px;" href="/">Travelling Blog</a>
    </div>

    <div>
        <div class="collapse navbar-collapse" style="font-size: 20px;">
            <ul class="navbar-nav">
                <!-- search -->
                <li class="nav-item active mx-2">
                    <form class="form-inline d-flex p-2" action="/" method="GET">
                        <input name="search" class="form-control" type="search"
                            placeholder="Search" value="{{request('search') ?? ''}}">
                        <!-- category filter -->
                        @if(request('category'))
                        <input type="hidden" name="category" value="{{request('category')}}">
                        @endif
                        <!-- distination filter -->
                        @if(request('distination'))
                        <input type="hidden" name="distination" value="{{request('distination')}}">
                        @endif
                        <button class="btn btn-light mx-1" type="submit">Search</button>
                    </form>                
                </li>
                <li class="nav-item active mx-2" style="width:120px">
                    <a class="nav-link text-white btn btn-outline-light" href="#">Home</a>
                </li>
                <!-- category -->
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