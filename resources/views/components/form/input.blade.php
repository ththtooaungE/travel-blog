@props(['name','type'=>'text','default'=>''])
<x-form.input-wrapper>
    <x-form.label name="{{$name}}" />
    <input type="{{$type}}" name="{{$name}}" value="{{old($name,$default)}}" class="form-control" id="{{$name}}" autofocus>
    <x-form.error name="{{$name}}" />
</x-form.input-wrapper>