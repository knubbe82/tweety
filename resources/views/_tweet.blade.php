<div class="flex p-4 border-b border-b-grey-400">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ route('profile', $tweet->user ) }}">
            <img 
                src="{{ $tweet->user->avatar }}"
                class="rounded-full mr-2"
                width="50"
                height="50" 
            >
        </a>
    </div>
    <div>
        <a href="{{ route('profile', $tweet->user ) }}">
            <h4 class="font-bold mb-4">{{ $tweet->user->name }}</h4>
        </a>
        <p class="text-sm">{{ $tweet->body }}</p>
    </div>
</div>