@props(['blog'])
<section class="container">
    <div class="col-md-8 mx-auto">
        @auth
        <form action="/blogs/{{$blog->slug}}/comments" method="POST">
            @csrf
            <div class="mb-3">
                <x-form.textarea name="comments" />
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        @else
        <div class="container">
            <div class="col-md-8 mx-auto ">
                <div class="text-center m-3 text-secondary">
                    <p><a href="/login">Login</a> to comment!</p>
                </div>
            </div>
        </div>
        @endauth
    </div>
</section>