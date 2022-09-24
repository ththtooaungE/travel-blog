@props(['name'])
@error($name)
<p class="text-danger pt-2" style="font-size: 13px;">{{$message}}</p>
@enderror