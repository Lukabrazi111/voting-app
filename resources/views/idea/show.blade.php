<x-app-layout>
    <div>
        <a href="{{ $backUrl }}" class="flex items-center font-semibold hover:underline">
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            <span class="ml-2">All ideas (or back to chosen category with filters)</span>
        </a>
    </div>

    {{-- Idea show --}}
    <livewire:idea-show
        :idea="$idea"
        :votesCount="$votesCount"
    />

    <div class="comments-container relative space-y-6 pt-4 md:ml-22 my-8 mt-1">
        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                <div class="flex-shrink-0">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&v=3" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full md:mx-4">
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div
                            x-data="{ isOpen : false }"
                            class="flex items-center space-x-2">
                            <button
                                @click="isOpen = !isOpen"
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full border h-7 transition duration-150 ease-in py-2 px-3 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
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
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> {{-- end comment-container --}}

        <div class="is-admin comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-shrink-0">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&v=16" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>
                    <div class="text-center uppercase text-blue text-xss font-bold mt-1">Admin</div>
                </div>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Status Changed To "Under Consideration"</a>
                    </h4>
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-blue">Adrea</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full border h-7 transition duration-150 ease-in py-2 px-3 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 top-5 ml-6">
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
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> {{-- end comment-container --}}

        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-shrink-0">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&v=9" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full mx-4">
                    {{--                    <h4 class="text-xl font-semibold">--}}
                    {{--                        <a href="#" class="hover:underline">A random title go here</a>--}}
                    {{--                    </h4>--}}
                    <div class="text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full border h-7 transition duration-150 ease-in py-2 px-3 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul class="hidden absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 top-5 ml-6">
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
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> {{-- end comment-container --}}
    </div> {{-- end comments-container --}}
</x-app-layout>
