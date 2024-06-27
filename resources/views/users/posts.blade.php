<x-layout>

    <h1 class="title">{{ $user->username }}'s Posts  &#9830; {{ $posts->count() }}</h1>

    {{-- User's posts  --}}
    <div class="grid grid-cols-2 gap-6">
        @foreach($posts as $post)

            <x-postCard :post="$post" />

        @endforeach

        <div>
            {{ $posts->links() }}
        </div>
    </div>

</x-layout>
