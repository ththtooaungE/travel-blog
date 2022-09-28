<x-admin.admin-layout>
    <div class="card p-2 m-2">
        <p class="text-center h3 p-2">Editing A Category</p>
        <form action="/admin/categories/{{$category->slug}}/edit" method="POST" class="p-2 m-2">
            @csrf
            @method('patch')
            <x-form.input name="name" :default="$category->name" />
            <x-form.input name="slug" :default="$category->slug" />
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</x-admin.admin-layout>