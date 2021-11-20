<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category One">Category One</option>
                <option value="Category One">Category One</option>
                <option value="Category One">Category One</option>
                <option value="Category One">Category One</option>
            </select>
        </div>

        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category One">Other Filters</option>
                <option value="Category One">Category One</option>
                <option value="Category One">Category One</option>
                <option value="Category One">Category One</option>
            </select>
        </div>

        <div class="w-2/3 relative">
            <input type="search" placeholder="Find an idea"
                   class="w-full rounded-xl placeholder-gray-900 bg-white border-none px-4 py-2 pl-8">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </div>
        </div>
    </div> {{-- end filters --}}

    <div class="ideas-container space-y-6 my-6">
        <div
            class="idea-container hover:shadow-card cursor-pointer transition duration-150 ease-in bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in
                         font-bold text-xss uppercase rounded-xl px-4 py-3">
                        Vote
                    </button>
                </div>
            </div>
            <div class="flex flex-1 px-2 py-6">
                <div class="flex-shrink-0">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&v=1" alt="avatar"
                             class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div
                            x-data="{ isOpen: false }"
                            class="flex items-center space-x-2"
                        >
                            <div
                                class="bg-gray-200 text-xss font-bold uppercase
                                leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Open
                            </div>
                            <button
                                x-on:click="isOpen = !isOpen"
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full border h-7 transition duration-150 ease-in py-2 px-3 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul
                                    x-cloak
                                    x-show="isOpen" x-transition.origin.
                                    @click.outside="isOpen = false"
                                    @keydown.esc.window="isOpen = false"
                                    class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 top-5 ml-6">
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
        </div> {{-- end idea-container --}}

        <div
            class="idea-container hover:shadow-card cursor-pointer transition duration-150 ease-in bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl text-blue">66</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 bg-blue text-white border border-gray-200 hover:border-gray-400 transition duration-150 ease-in
                         font-bold text-xss uppercase rounded-xl px-4 py-3">
                        Vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-shrink-0">
                    <img src="https://source.unsplash.com/200x200/?face=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Another random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, harum laborum. A accusantium
                        alias consequuntur, dolore earum explicabo fugit ipsam, ipsum laudantium non quisquam rerum
                        soluta voluptas! Accusantium aliquam aut cum deleniti dolores eaque, eos exercitationem fugiat
                        illo in, iure laudantium molestias natus nostrum officiis omnis optio perferendis placeat
                        quaerat quibusdam recusandae reiciendis repudiandae saepe sed temporibus vel voluptates
                        voluptatum. A autem consequatur delectus, doloribus fuga illum ipsam iusto laborum molestias
                        mollitia necessitatibus nisi odio praesentium quis tempora unde vel, veritatis? Aspernatur
                        exercitationem libero magnam quia voluptates. A animi autem corporis, fugiat iusto nam
                        necessitatibus, officia officiis porro quam, similique.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div
                                class="bg-yellow text-white text-xss font-bold uppercase
                                leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                In progress
                            </div>
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 top-5 ml-6">
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
        </div> {{-- end idea-container --}}

        <div
            class="idea-container hover:shadow-card cursor-pointer transition duration-150 ease-in bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">32</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in
                         font-bold text-xss uppercase rounded-xl px-4 py-3">
                        Vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-shrink-0">
                    <img src="https://source.unsplash.com/200x200/?face=4" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Yet another random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, harum laborum. A accusantium
                        alias consequuntur, dolore earum explicabo fugit ipsam, ipsum laudantium non quisquam rerum
                        soluta voluptas! Accusantium aliquam aut cum deleniti dolores eaque, eos exercitationem fugiat
                        illo in, iure laudantium molestias natus nostrum officiis omnis optio perferendis placeat
                        quaerat quibusdam recusandae reiciendis repudiandae saepe sed temporibus vel voluptates
                        voluptatum. A autem consequatur delectus, doloribus fuga illum ipsam iusto laborum molestias
                        mollitia necessitatibus nisi odio praesentium quis tempora unde vel, veritatis? Aspernatur
                        exercitationem libero magnam quia voluptates. A animi autem corporis, fugiat iusto nam
                        necessitatibus, officia officiis porro quam, similique.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div
                                class="bg-red text-white text-xss font-bold uppercase
                                leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Closed
                            </div>
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 top-5 ml-6">
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
        </div> {{-- end idea-container --}}

        <div
            class="idea-container hover:shadow-card cursor-pointer transition duration-150 ease-in bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">22</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in
                         font-bold text-xss uppercase rounded-xl px-4 py-3">
                        Vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-shrink-0">
                    <img src="https://source.unsplash.com/200x200/?face=8" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">One more random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, harum laborum. A accusantium
                        alias consequuntur, dolore earum explicabo fugit ipsam, ipsum laudantium non quisquam rerum
                        soluta voluptas! Accusantium aliquam aut cum deleniti dolores eaque, eos exercitationem fugiat
                        illo in, iure laudantium molestias natus nostrum officiis omnis optio perferendis placeat
                        quaerat quibusdam recusandae reiciendis repudiandae saepe sed temporibus vel voluptates
                        voluptatum. A autem consequatur delectus, doloribus fuga illum ipsam iusto laborum molestias
                        mollitia necessitatibus nisi odio praesentium quis tempora unde vel, veritatis? Aspernatur
                        exercitationem libero magnam quia voluptates. A animi autem corporis, fugiat iusto nam
                        necessitatibus, officia officiis porro quam, similique.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div
                                class="bg-green text-white text-xss font-bold uppercase
                                leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Implemented
                            </div>
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 top-5 ml-6">
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
        </div> {{-- end idea-container --}}

        <div
            class="idea-container hover:shadow-card cursor-pointer transition duration-150 ease-in bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">2</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in
                         font-bold text-xss uppercase rounded-xl px-4 py-3">
                        Vote
                    </button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-shrink-0">
                    <img src="https://source.unsplash.com/200x200/?face=6" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Last random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, harum laborum. A accusantium
                        alias consequuntur, dolore earum explicabo fugit ipsam, ipsum laudantium non quisquam rerum
                        soluta voluptas! Accusantium aliquam aut cum deleniti dolores eaque, eos exercitationem fugiat
                        illo in, iure laudantium molestias natus nostrum officiis omnis optio perferendis placeat
                        quaerat quibusdam recusandae reiciendis repudiandae saepe sed temporibus vel voluptates
                        voluptatum. A autem consequatur delectus, doloribus fuga illum ipsam iusto laborum molestias
                        mollitia necessitatibus nisi odio praesentium quis tempora unde vel, veritatis? Aspernatur
                        exercitationem libero magnam quia voluptates. A animi autem corporis, fugiat iusto nam
                        necessitatibus, officia officiis porro quam, similique.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div
                                class="bg-purple text-white text-xss font-bold uppercase
                                leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Considering
                            </div>
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 top-5 ml-6">
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
        </div> {{-- end idea-container --}}
    </div> {{-- end ideas-container --}}
</x-app-layout>
