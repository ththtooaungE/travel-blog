<x-layout>

    @if(session('success'))
    <div class="d-flex justify-content-center align-items-center p-2 m-2"><p class="p-0 m-0">{{session()->get('success')}}</p></div>
    @endif
    
    <!-- hero section -->
    <img src="/images/bagan-burma-myanmar.jpg" width="100%" class="mb-5" alt="">

    <div class="container">
        <x-distination-dropdown />
        <x-blog-section :blogs="$blogs" />
        <x-subscribe />
    </div>

</x-layout>