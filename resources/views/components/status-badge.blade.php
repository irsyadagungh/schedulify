<!-- status-badge.blade.php -->

@php
    $statusClass = '';
    $textClass = '';
    
    switch ($slot) {
        case 'On Progress':
            $statusClass = 'bg-onProgress';
            $textClass = 'text-black';
            break;
        case 'Rejected':
            $statusClass = 'bg-rejected';
            $textClass = 'text-text-rejected';
            break;
        case 'Done':
            $statusClass = 'bg-dones';
            break;
        default:
            $statusClass = 'bg-gray-500';
            break;
    }
@endphp

<span class="inline-block px-2 py-1 font-light rounded-full text-sm text-white {{ $statusClass }}">
    {{ $slot }}
</span>
