<form class="form-inline d-flex p-2" action="/" method="GET">
    <input name="search" class="form-control" type="search"
        placeholder="Search" value="{{request('search') ?? ''}}">
    <!-- category filter -->
    @if(request('category'))
    <input type="hidden" name="category" value="{{request('category')}}">
    @endif
    <!-- distination filter -->
    @if(request('distination'))
    <input type="hidden" name="distination" value="{{request('distination')}}">
    @endif
    <button class="btn btn-light mx-1" type="submit">Search</button>
</form>