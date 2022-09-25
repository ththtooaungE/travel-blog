<x-layout>
    <div class="container p-3 m-3 mb-5 mx-auto">
        <p class="h3 text-center p-3 m-2">Register Form</p>
        <div class="d-flex justify-content-center">
            <div class="card w-75">
                <div class="card-body">

                    <form action="/register" method="POST" enctype="multipart/form-data">
                        @csrf
                        <x-form.input name="name" />
                        <x-form.input name="username" />
                        <x-form.input name="email" type="email" />

                        <div class="mb-3">
                            <x-form.label name="password" />
                            <input type="password" name="password" class="form-control" id="password">
                            <x-form.error name="password" />
                        </div>
                        <x-form.input-wrapper>
                            <x-form.label name="avatar" />
                            <input type="file" name="avatar" id="avatar" class="form-control">
                            <small id="avatar" class="form-text text-muted">You can add profile photo if you wish.</small>
                            <x-form.error name="avatar" />
                        </x-form.input-wrapper>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary mx-2">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>