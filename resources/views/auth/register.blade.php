<x-layout>
    <div class="container p-3 m-3 mb-5 mx-auto">
        <p class="h3 text-center p-3 m-2">Register Form</p>
        <div class="d-flex justify-content-center">
            <div class="card w-75">
                <div class="card-body">
                    <form action="/register" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" value="{{old('name')}}" class="form-control" id="name" autofocus>
                            @error('name')
                            <p class="text-danger pt-2" style="font-size: 13px;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" value="{{old('username')}}" class="form-control" id="username">
                            @error('username')
                            <p class="text-danger pt-2" style="font-size: 13px;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" value="{{old('email')}}" class="form-control" id="email">
                            @error('email')
                            <p class="text-danger pt-2" style="font-size: 13px;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password">
                            @error('password')
                            <p class="text-danger pt-2" style="font-size: 13px;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary mx-2">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
    </div>
</x-layout>