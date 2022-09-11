@props(['categories','currentCategory'])
<div class="card p-3 m-2 text-light shadow-sm border-0" style="background-color: #598EC2;">
    <form action="/" method="GET" class="d-flex justify-content-center">
        <!-- search filter -->
        @if (request('search'))
        <input type="hidden" name="search" value="{{request('search')}}">
        @endif
        <!-- category filter -->
        @if (request('category'))
        <input type="hidden" name="category" value="{{request('category')}}">
        @endif
        <p class="h5 pt-1 px-2 mx-2">Distinations</p>
        <select name="distination" class="form-select text-center" aria-label="Default select example">
            <option value="">All</option>
            @foreach($distinations as $distination)
            <option value="{{$distination->slug}}">{{$distination->name}}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-outline-dark px-3 mx-3">Find</button>
    </form>
</div>