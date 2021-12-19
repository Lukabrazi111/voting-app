<div class="comment-container relative bg-white rounded-xl flex transition duration-500 ease-in mt-4">
    <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
        <div class="flex-shrink-0">
            <a href="#">
                <img src="{{ $comment->user->getAvatar() }}" alt="avatar"
                     class="w-14 h-14 rounded-xl">
            </a>
        </div>
        <div class="w-full md:mx-4">
            <div class="text-gray-600">
                {{ $comment->body }}
            </div>
            <div class="flex items-center justify-between mt-6">
                <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                    <div class="font-bold text-gray-900">{{ $comment->user->name }}</div>
                    <div>&bull;</div>
                    @if($comment->user->id === $ideaUserId)
                        <div class="rounded-full border bg-gray-100 px-3 py-1">OP</div>
                        <div>&bull;</div>
                    @endif
                    <div>{{ $comment->created_at->diffForHumans() }}</div>
                </div>
                <div
                    x-data="{ isOpen : false }"
                    class="flex items-center space-x-2">
                    <div class="relative">
                        <button
                            @click="isOpen = !isOpen"
                            class="relative bg-gray-100 hover:bg-gray-200 rounded-full border h-7 transition duration-150 ease-in py-2 px-3 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                            </svg>
                        </button>
                        <ul
                            x-cloak
                            x-show="isOpen" x-transition.origin
                            @click.outside="isOpen = false"
                            @keydown.esc.window="isOpen = false"
                            class="absolute w-44 text-left font-semibold bg-white z-10 shadow-dialog rounded-xl
                                     md:ml-8 top-8 md:top-6 right-0 md:left-0 py-3 top-5 ml-6">
                            <li>
                                <a href="#"
                                   class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Mark
                                    as Spam</a>
                            </li>
                            <li>
                                <a href="#"
                                   class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Delete
                                    Post</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
