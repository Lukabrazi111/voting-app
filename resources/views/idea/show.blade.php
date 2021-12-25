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

    {{-- Notifications --}}
    <x-notification-success/>

    <livewire:idea-comments :idea="$idea"/>

    {{-- Edit idea --}}
    @can('update', $idea)
        <livewire:edit-idea :idea="$idea"/>
    @endcan

    {{-- Delete idea --}}
    @can('delete', $idea)
        <livewire:delete-idea :idea="$idea"/>
    @endcan

    <livewire:mark-idea-as-spam :idea="$idea"/>

    <livewire:mark-idea-as-not-spam :idea="$idea"/>

    @auth
        <livewire:edit-comment/>
    @endauth

    @auth
        <livewire:delete-comment/>
    @endauth

    @auth
        <livewire:mark-comment-as-spam/>
    @endauth

    @auth
        <livewire:mark-comment-as-not-spam/>
    @endauth


</x-app-layout>
