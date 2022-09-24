<x-admin.admin-layout>
    <div class="card p-2 m-2">
        <p class="text-center h3 p-2">Creating A New Blog</p>

        <form action="/admin/blogs/create" method="POST" enctype="multipart/form-data" class="p-2 m-2">
            @csrf

            <x-form.input name="title" />
            <x-form.input name="slug" />

            <x-form.textarea name="body" />
            <x-form.input-wrapper>
                <x-form.label name="category" />
                <select name="categories[]" class="form-select text-center mb-2" size="3" multiple>
                    @foreach($categories as $category)
                    <option 
                        @if(old('categories') !== null)
                        @foreach(old('categories') as $oldCategory)
                        {{$category->id == $oldCategory ? 'selected' : ''}}
                        @endforeach
                        @endif
                        value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                <x-form.error name='categories' />
                <x-form.error name='categories.0' />
                <x-form.error name='categories.1' />
            </x-form.input-wrapper>

            <x-form.input-wrapper>
                <x-form.label name="distination" />
                <select name="distination_id" id="distination" class="form-select text-center mb-2">
                    <option value="">Distination</option>
                    @foreach($distinations as $distination)
                    <option {{$distination->id == old('distination_id') ? 'selected' : ''}} value="{{$distination->id}}">{{ucwords($distination->name)}}</option>
                    @endforeach
                </select>
                <x-form.error name='distination_id' />
            </x-form.input-wrapper>
            <x-form.input-wrapper>
                <x-form.label name="image" />
                <input type="file" name="image" id="image" class="form-control">
                <x-form.error name='image' />
            </x-form.input-wrapper>
            <x-form.input name="created_at" type="datetime-local" />
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-admin.admin-layout>