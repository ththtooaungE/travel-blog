@props(['name','default'=>''])
<x-form.input-wrapper>
    <x-form.label name="{{$name}}" />
    <textarea name="{{$name}}" class="form-control editor" id="{{$name}}" cols="30" rows="10">{{old($name,$default)}}</textarea>
    <x-form.error name="{{$name}}" />
</x-form.input-wrapper>
