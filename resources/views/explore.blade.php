<x-app>
    <div>
        @foreach ($users as $user)
            <a href="{{ $user->path() }}" class="flex items-center mb-5">
                <img src="{{ $user->avatar }}" alt="{{ $user->username }}'s avatar'" class="mr-4 rounded" style="width:60px;height:60px;max-width: 60px;
                max-height: 60px;
                object-fit: cover;">
                <div>

                    <h4 class="font-bold">{{ '@' . $user->username }}</h4>
                </div>
            </a>

        @endforeach
        {{ $users->links() }}
    </div>
</x-app>
