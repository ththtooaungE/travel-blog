@props(['name','default'=>''])
<x-form.input-wrapper>
    <x-form.label name="{{$name}}" />
    <textarea name="{{$name}}" class="form-control editor" id="{{$name}}" cols="10" rows="5">{{old($name,$default)}}</textarea>
    <x-form.error name="{{$name}}" />
</x-form.input-wrapper>
