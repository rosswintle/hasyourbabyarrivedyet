@props(['for'])

<label for="{{ $for }}" class="block text-md font-medium text-gray-900 dark:text-gray-100">
    {{ $slot }}
</label>
