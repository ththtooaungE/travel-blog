<x-layout>
    <x-nav></x-nav>
    <div class="container">
        <div class="row">
            <!-- single blog -->
            <div class="col-8">
                <img src="/images/bagan-burma-myanmar.jpg" width="100%" alt="blog picture">
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