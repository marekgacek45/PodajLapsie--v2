<x-form.field>
    <x-form.label name="{{ $name }}" label="{{$label}}" />

    
    
  

    <textarea      wire:model.live.lazy="{{ $name }}"  name="{{ $name }}" id="{{ $name }}" rows="2"  class="block p-2.5 w-full text-sm text-gray-900  rounded-md border border-gray-600 focus:ring-black focus:black  min-h-[200px]" placeholder="W czym mogę Ci pomóc?" required>{{old($name)}}</textarea>
    

    <x-form.error name='{{ $name }}' />
</x-form.field>