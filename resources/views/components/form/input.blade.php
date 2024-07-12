


<x-form.field>
    <x-form.label name="{{ $name }}" label="{{$label}}" />

    
    
    <input
    {{$attributes(['class'=>'text-gray-900 text-base rounded-md focus:ring-black focus:border-black block p-2.5 w-full'])}}
    
    wire:model.live.lazy="{{ $name }}"  name="{{ $name }}" id="{{ $name }}" {{ $attributes(['value' => old($name)]) }}>



    <x-form.error name='{{ $name }}' />
</x-form.field>