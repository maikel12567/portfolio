@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-orange-800 dark:text-orange-400']) }}>
    {{ $value ?? $slot }}
</label>
