<x-layout>
    <x-nav></x-nav>
    <div class="container">
        <div class="row">
            <!-- single blog -->
            <div class="col-8">
                <img src="/images/bagan-burma-myanmar.jpg" width="100%" alt="blog picture">
                <h1 class="pt-2 m-2">{{$blog->title}}</h1>
                <p>written by <b>{{$blog->user->name}}</b></p>
                <div>
                @foreach($blog->category->map(function($category){return $category->name;}) as $category)
                    <a class="text-white" 
                        href=""><span class="badge bg-success p-2">{{$category}}</span></a>
                @endforeach
                </div>
                <p>{{$blog->body}}</p>
        
            </div>
            <!-- distinations -->
            <div class="col-4 p-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Distinations</h4>
                        <form action="">
                            <select name="" id="" class="form-select">
                                <option value="">Mandalay</option>
                                <option value="">Mandalay</option>
                                <option value="">Mandalay</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>