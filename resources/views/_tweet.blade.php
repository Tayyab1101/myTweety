<div class="flex p-4 {{$loop->last ? '' : 'border-b border-gray-400'}}">
    <div class="mr-2 flex-shrink-0">
        <a href="{{route('profile',$tweet->user)}}">
            <img src="{{$tweet->user->avatar}}" alt="" class="rounded-full mr-2" style="width:40px;height:40px;max-width: 40px;
            max-height: 40px;
            object-fit: cover;">
        </a>
    </div>
    <div>
        <h5 class="font-bold mb-4">
            <a href="{{route('profile',$tweet->user)}}">
                {{$tweet->user->name}}
            </a>
        </h5>

        <p class="text-sm">
            {{$tweet->body}}
        </p>
    </div>
</div>