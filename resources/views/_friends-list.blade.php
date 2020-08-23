<h3 class="font-bold text-xl mb-4">Following</h3>

<ul clas="mb-4">
    @forelse(auth()->user()->follows as $user)
    <li>
        <div>
            <a href="{{route('profile',$user)}}" class="flex items-center text-sm mb-4">
                <img src="{{$user->avatar}}" alt="" class="rounded-full mr-2 " style="width:40px;height:40px;max-width: 40px;
                max-height: 40px;
                object-fit: cover;">

                {{$user->name}}
            </a>
        </div>
    </li>
    @empty
    <li>No friends yet!</li>
    @endforelse
</ul>