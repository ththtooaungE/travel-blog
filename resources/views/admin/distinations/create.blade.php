<x-admin.admin-layout>
    <div class="card p-2 m-2">
        <p class="text-center h3 p-2">Creating A New Distination</p>
        <form action="/admin/distinations/create" method="POST" class="p-2 m-2">
            @csrf
            <x-form.input name="name" />
            <x-form.input name="slug" />
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</x-admin.admin-layout>