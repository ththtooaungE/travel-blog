<ul class="nav nav-pills nav-fill flex-column p-2 m-2">
    <li class="nav-item btn btn-primary p-2 m-1 d-flex justify-content-center align-items-center" style="background-color: #0000;">
        <div>
            <img src="{{auth()->user()->avatar}}" alt="" class=" mx-3 rounded-circle" height="45xp" width="45px">
        </div>
        <div>
            <a class="nav-link text-dark p-0 m-0" href="/admin/blogs">{{auth()->user()->name}}</a>
        </div>
    </li>
    <li class="nav-item btn btn-primary p-2 m-1" style="background-color: #598EC2;">
        <a class="nav-link text-white p-0 m-0" href="/admin/blogs">Blogs</a>
    </li>
    <li class="nav-item btn btn-primary p-2 m-1" style="background-color: #598EC2;">
        <a class="nav-link text-white p-0 m-0" href="#">Users</a>
    </li>
    <li class="nav-item btn btn-primary p-2 m-1" style="background-color: #598EC2;">
        <a class="nav-link text-white p-0 m-0" href="#">Admins</a>
    </li>
    <li class="nav-item btn btn-primary p-2 m-1" style="background-color: #598EC2;">
        <a class="nav-link text-white p-0 m-0" href="#">Categories</a>
    </li>
    <li class="nav-item btn btn-primary p-2 m-1" style="background-color: #598EC2;">
        <a class="nav-link text-white p-0 m-0" href="#">Distinations</a>
    </li>
</ul>