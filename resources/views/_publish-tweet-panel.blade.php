<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form action="/tweets" method="post">
        @csrf
        <textarea name="body" class="w-full outline-none" placeholder="What's up doc?" required></textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img src="{{ auth()->user()->avatar }}" alt="Your Avatar" class="rounded-full mr-2" style="width:50px;height:50px;max-width: 50px;
            max-height: 50px;
            object-fit: cover;">

            <button type="submit" class="bg-blue-500 rounded-lg shadow text-sm px-6 h-10 text-white">Publish</button>
        </footer>

    </form>
    @error('body')
    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
