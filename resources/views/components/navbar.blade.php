<nav class="navbar navbar-expand-lg navbar-light p-2 justify-content-between shadow" style="background-color: #598EC2;">
    
    <div class="collapse navbar-collapse">
        <a href="/"
            class="navbar-brand pb-2 px-3 mx-3 text-white" 
            style="font-size: 28px;">Travelling Blog</a>
        <x-search-form />
    </div>

    <div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                
                @auth
                <li class="nav-item active mx-2 d-flex align-items-center justify-content-center">
                    <a href="/">
                        <img src="{{auth()->user()->avatar}}" alt="" class="mx-3 rounded-circle" height="45xp" width="45px">
                    </a>
                    <a  href="/" class="my-auto text-dark">{{auth()->user()->name}}</a>                    
                </li>
                @if(auth()->user()->is_admin)
                <li class="nav-item active mx-2">
                    <a href="/admin/blogs" 
                    class="nav-link btn btn-light text-white" 
                    style="width:100px;background-color: #1A385A;">Dashboard</a>
                </li>
                @endif
                @endauth 

                <li class="nav-item active mx-2">
                    <a href="/" 
                    class="nav-link btn btn-light text-white" 
                    style="width:100px;background-color: #1A385A;">Home</a>
                </li>
                <!-- category -->
                <li class="nav-item dropdown mx-2">
                    <x-category-dropdown />
                </li>
                @guest
                <li class="nav-item active mx-2">
                    <a href="/register" 
                        class="nav-link btn btn-light text-white" 
                        style="width:100px;background-color: #1A385A;">Register</a>
                </li>
                <li class="nav-item active mx-2">
                    <a href="/login" 
                    class="nav-link btn btn-light text-white" 
                    style="width:100px;background-color: #1A385A;">Login</a>
                </li>
                @endguest
                @auth
                <li class="nav-item active mx-2">
                    <form action="/logout" method="POST">
                        @csrf
                        <input type="submit" value="Logout" 
                        class="nav-link btn btn-light text-white" 
                        style="width:100px;background-color: #1A385A;">
                    </form>
                </li>
                @endauth
                <li class="nav-item active mx-2">
                    <a href="#" 
                    class="nav-link btn btn-light text-white" 
                    style="width:100px;background-color: #1A385A;">About</a>
                </li>   
            </ul>   
        </div>
    </div>
</nav>