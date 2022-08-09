<textarea x-data="editor($el, @entangle($attributes->wire('model')))" name="{{ $name }}" x-cloak></textarea>
<label for="{{ $name }}">
    {{ $slot }}:
</label>

@php
    $name = $attributes->wire('model')->value();
@endphp