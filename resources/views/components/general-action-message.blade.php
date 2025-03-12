@props([
    'redirect' => false,
    'type' => 'success',
    'messageToDisplay' => '',
])

<div
    x-data="{ shown: false, 
              messageToDisplay: '{{ $messageToDisplay }}', 
              type: @if ($type === 'success') false @elseif ($type === 'error') true @endif,
              showNotification(message) {
                this.shown = true
                this.messageToDisplay = message
                setTimeout(() => {
                    this.shown = false
                }, 5000)},
              timeout: null 
            }"
    x-init="
            @if ($redirect)
                $nextTick(() => showNotification(messageToDisplay))
            @endif
        "
    x-show.transition.out.opacity.duration.1500ms="shown"
    x-transition:leave.opacity.duration.1500ms
    style="display: none"
    {{ $attributes->merge(['class' => 'text-sm z-20 flex justify-between max-w-xs sm:max-w-sm w-full fixed top-10 right-0 bg-white dark:bg-zinc-800 rounded-xl shadow-lg border dark:border-white px-4 py-5 mx-2 sm:mx-6 my-8']) }}
>
    <div class="flex items-center">
        
        <flux:icon.check-circle x-show="!type" class="text-green-600" />

        <flux:icon.x-circle x-show="type" class="text-red-600" />    

        <div class="font-semibold text-gray-500 dark:text-white text-sm sm:text-base ml-2" x-text="messageToDisplay"></div> 
    </div> 
    <button @click="shown = false" class="text-gray-400 hover:text-gray-500">
        <flux:icon.x-mark />       
    </button>
        
</div>