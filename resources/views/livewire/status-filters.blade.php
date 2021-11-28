<nav class="hidden md:flex flex items-center text-gray-400 justify-between text-xs">
    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
        <li><a wire:click.prevent="setStatus('All')" href="#"
               class="border-b-4 pb-3 @if($status === 'All') border-blue text-gray-900 @endif transition duration-150 hover:border-blue">All Ideas ({{ $statusCount['all_statuses'] }})</a></li>

        <li><a wire:click.prevent="setStatus('Considering')" href="#"
               class="@if($status === 'Considering') border-blue text-gray-900 @endif transition duration-150 ease-in border-b-4 pb-3
                 hover:border-blue">Considering ({{ $statusCount['considering'] }})</a>
        </li>

        <li><a wire:click.prevent="setStatus('In Progress')" href="#"
               class="@if($status === 'In Progress') border-blue text-gray-900 @endif transition duration-150 ease-in border-b-4 pb-3
                 hover:border-blue">In Progress ({{ $statusCount['in_progress'] }})</a></li>
    </ul>

    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
        <li><a wire:click.prevent="setStatus('Implemented')" href="#"
               class="@if($status === 'Implemented') border-blue text-gray-900 @endif transition duration-150 ease-in border-b-4 pb-3
                 hover:border-blue">Implemented ({{ $statusCount['implemented'] }})</a></li>

        <li><a wire:click.prevent="setStatus('Closed')" href="#"
               class="@if($status === 'Closed') border-blue text-gray-900 @endif transition duration-150 ease-in border-b-4 pb-3
                 hover:border-blue">Closed ({{ $statusCount['closed'] }})</a></li>
    </ul>
</nav>
