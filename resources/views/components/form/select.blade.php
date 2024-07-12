<x-form.field>
    <x-form.label name="{{ $name }}" label="{{ $label }}" />





    <select id="type" wire:model.live.lazy="{{ $name }}" name="{{ $name }}"
        class=" border border-gray-500 text-grey-900 text-sm  focus:ring-black focus:border-black block w-full h-[46px]  mx-auto rounded-md">
        {{ $slot }}
    </select>

    <x-form.error name='{{ $name }}' />
</x-form.field>
