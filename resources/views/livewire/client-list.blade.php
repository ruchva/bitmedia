<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach($clients as $client)
        <x-client-card :client="$client" />
    @endforeach
</div>
<!-- todo el contenido debe ir dentro de este div padre -->
<!-- de lo contrario livewire no sabra como renderizar -->