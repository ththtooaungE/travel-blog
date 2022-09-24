<x-layout>
    <div class="container p-3 m-3 mb-5 mx-auto">
        <p class="h3 text-center p-3 m-2">Login Form</p>
        <div class="d-flex justify-content-center">
            <div class="card w-75">
                <div class="card-body">
                    <form action="/login" method="POST">
                        @csrf
                        <x-form.input name="email" type="email" />
                        <x-form.input-wrapper>
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password">
                            <x-form.error name="password" />
                        </x-form.input-wrapper>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</x-layout>