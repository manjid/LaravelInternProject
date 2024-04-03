<x-button
  type="{{ $type ?? 'button' }}"
  form="{{ $form ?? '' }}"
  class="{{ $class ?? '' }}"
  outlined="{{ $outlined ?? false }}"
  disabled="{{ $disabled ?? false }}"
>
  {{ $slot }}
</x-button>
