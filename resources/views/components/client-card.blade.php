<div class="bg-white shadow-lg sounded-lg px-4 py-6 text-center">
    <a href="{{ route('client', $client->slug) }}">
        
        <img src="{{ $client->image }}" class="rounded-md mb-2">
        <h2 class="text-lg text-gray-600 truncate uppercase">{{ $client->name }}</h2>
        <h3>{{ $client->excerpt }}</h3>

        <img src="{{ $client->avatar }}" class="rounded-full mt-4 mx-auto h-16 w-16">
    </a>
</div>

<!-- componente blade para mejor organizacion de -->