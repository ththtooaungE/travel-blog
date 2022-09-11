<x-layout>
    
    <x-nav />
    <!-- hero section -->

    <img src="/images/bagan-burma-myanmar.jpg" width="100%" class="mb-5" alt="">

    <div class="container">

        <x-distination-dropdown />
     
        <x-blog-section :blogs="$blogs" />


        <!-- subscribe feature -->
        <div class="card p-3 m-2 text-center shadow-sm border-0 mb-5" style="background-color: #1A385A;">
            <p class="text-white">Suscribe now!</p>
            <div class="row justify-content-center">
                <div class="col-8">
                    <form action="">
                        <input type="email" name="email" class="form-control" placeholder="Enter your email">                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>