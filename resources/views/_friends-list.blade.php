<h3 class="font-bold text-xl mb-4">Following</h3>

<ul clas="mb-4">
    @foreach(auth()->user()->follows as $user)
    <li>
        <div>
            <a href="{{route('profile',$user)}}" class="flex items-center text-sm mb-4">
                <img src="https://picsum.photos/seed/{{$user->email}}/40" alt="" class="rounded-full mr-2">

                {{$user->name}}
            </a>
        </div>
    </li>
    @endforeach
</ul>