<x-layout>
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
                <x-distination-dropdown-wrapper>
                    <x-distination-dropdown class="flex-column" :blog="$blog" />
                </x-distination-dropdown-wrapper>
            </div>
        </div>
    </div>
</x-layout>