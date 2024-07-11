@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-purple-400 dark:text-gray-300']) }}>
    {{ $value ?? $slot }}
</label>
