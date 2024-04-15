@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-white']) }}>
        {{ status }}
    </div>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function () {
    const statusMessage = document.getElementById('status');

    if (statusMessage) {
        setTimeout(() => {
            statusMessage.querySelector('.alert-success');
        }, 5000)
        statusMessage.querySelector('.alert-success').remove(); // Remove the success message after 5 seconds
    }
});
</script>
