@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-lg text-gray-500
 dark:text-gray-300']) }}>
    {{ $value ?? $slot }}
</label>
