<div class="flex flex-col cursor-pointer note-container">
    <div class="card w-44 h-44 rounded-lg p-4 overflow-hidden relative {{$bgColor ?? 'bg-card'}}">
        <div class="flex flex-col gap-2">
            {{$slot}}
        </div>
    </div>
</div>
