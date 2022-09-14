@props(['categories','currentCategory','blog'])
    <form {{$attributes->merge(['action'=>'/','method'=>'get','class'=>'d-flex justify-content-center align-items-center'])}}>
        <!-- search filter -->
        @if (request('search'))
        <input type="hidden" name="search" value="{{request('search')}}">
        @endif
        <!-- category filter -->
        @if (request('category'))
        <input type="hidden" name="category" value="{{request('category')}}">
        @endif
        <p class="h5 mx-2">Distinations</p>
        <select name="distination" class="form-select text-center" size="{{isset($blog) ? 5 : 0}}">
            <option class="p-2 m-2">All</option>
            @foreach($distinations as $distination)
            <option value="{{$distination->slug}}" class="p-2 m-2">{{$distination->name}}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-outline-dark p-2 m-2">Find</button>
    </form>
