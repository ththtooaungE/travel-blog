<x-admin.admin-layout>
    <div class="card p-2 m-2">
        <p class="text-center h3 p-2">Creating A New Blog</p>
        <!-- @php
        if (old('categories') !== null || $blog !== null) {
            echo "hellp";
        }
        @endphp -->
        <!-- @(old('categories',$blog->categories)) -->
        <form action="/admin/blogs/{{$blog->slug}}/update" method="POST" enctype="multipart/form-data" class="p-2 m-2">
            @csrf
            @method('patch')
            <x-form.input name="title" :default="$blog->title" />
            <x-form.input name="slug" :default="$blog->slug" />
            <x-form.textarea name="body" :default="$blog->body" />

            <x-form.input-wrapper>
                <x-form.label name="category" />
                <select name="categories[]" id="category" class="form-select text-center mb-2" size="3" multiple>
                    @foreach($categories as $category)
                    <option 
                        @if(old('categories') !== null)
                            @foreach(old('categories') as $oldCategory)
                                {{$category->id == $oldCategory ? 'selected' : ''}}
                            @endforeach
                        @endif
                        @if($blog->categories !== null && old('categories') == null)
                            @foreach($blog->categories as $oldCategory)
                                {{$category->id == $oldCategory->id ? 'selected' : ''}}
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
                    <option {{$distination->id == old('distination_id',$blog->distination_id) ? 'selected' : ''}}
                        value="{{$distination->id}}">{{ucwords($distination->name)}}</option>
                    @endforeach
                </select>
                <x-form.error name='distination_id' />
            </x-form.input-wrapper>
            <x-form.input-wrapper>
                <x-form.label name="image" />
                @if($blog->image)
                <img src="/storage/{{$blog->image}}" alt="image" class="p-2 m-2" width="150px">
                @endif
                <input type="file" name="image" id="image" value="" class="form-control">
                <x-form.error name='image' />
            </x-form.input-wrapper>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</x-admin.admin-layout>