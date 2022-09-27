<x-admin.admin-layout>
    <div class="card p-2 m-2">
        <p class="text-center h3 p-2">Editing A New Distination</p>
        <form action="/admin/distinations/{{$distination->slug}}/edit" method="POST" class="p-2 m-2">
            @csrf
            @method('patch')
            <x-form.input name="name" :default="$distination->name" />
            <x-form.input name="slug" :default="$distination->slug" />
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</x-admin.admin-layout>