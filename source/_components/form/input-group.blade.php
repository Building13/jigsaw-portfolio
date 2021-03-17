<div {{ $attributes->merge(['class' => 'w-full']) }}>
    <x-form.label id="{{ $id }}" label="{{ $label }}" />
    {{ $slot }}
</div>