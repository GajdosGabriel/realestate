<div class="card">
    <img class="card-img-top" src="http://placehold.it/400x180" alt="">

    <div class="card-body">
        <h4 class="card-title">{{ $objProject->name }}</h4>

        <p class="card-text lead color_primary">{{ $objProject->roi }}</p>

        <p class="card-text">{{ $objProject->location }}</p>

        <a href="{{ $objProject->url }}" target="_blank">Go to Project details page</a>
    </div>
</div>