@unless(current_user()->is($user))
    <form action="{{ route('follow', $user) }}" method="POST">
        @csrf
        <button type="submit" href="" class="rounded-full shadow py-2 px-4 {{ auth()->user()->following($user)
                ? 'text-black bg-gray-300'
                : 'text-white bg-blue-500' }} text-sm">
            {{ auth()->user()->following($user)
                    ? 'Unfollow Me'
                    : 'Follow Me' }}
        </button>
    </form>
@endunless
