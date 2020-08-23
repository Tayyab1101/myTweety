<x-app>
    <header class="prof_header" class="mb-6">
        <div style="position:relative">
            <img src="/images/default-profile-banner.jpg" class="mb-2" alt="">

            <a href="..." class="absolute" style="left: 50%;bottom:0px;transform:translate(-50%,50%)">

                <img src="{{$user->avatar}}" alt="" class="rounded-full mr-2"
                    style="width:9.375em;height:9.375em;object-fit:cover;">
            </a>
        </div>
        <div class="flex justify-between items-center">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{$user->name}}</h2>
                <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
            </div>

            <div class="flex">
                @can ('edit',$user)
                <a href="{{$user->path('edit')}}"
                    class="rounded-full border border-gray-300 py-2 px-4 text-black text-sm mr-2">Edit
                    Profile</a>
                @endcan
                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        <p class="text-sm my-6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis ullam eum modi enim! Blanditiis, natus
            sit
            suscipit porro veniam hic quidem laborum? Beatae nemo quos incidunt sapiente voluptate praesentium ipsa!
        </p>

    </header>

    @include('_timeline',[
    'tweets' => $user->tweets
    ])

</x-app>