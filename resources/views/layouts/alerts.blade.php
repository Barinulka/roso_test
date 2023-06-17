@if (session('success'))
    @php
        $message = session('success')
    @endphp
    <x-alert type="success" :message="$message"></x-alert>
@endif

@if (session('warning'))

    @php
        $message = session('warning')
    @endphp
    <x-alert type="warning" :message="$message"></x-alert>

@endif