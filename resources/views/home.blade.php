@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <a href="{{ request()->fullUrlWithQuery(['per_page' => 3]) }}">Test</a>
                    @foreach($meals as $meal)
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $meal->{'title_'.app()->getLocale()} }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                            @foreach($meal->ingredients as $mealIngredient)
                                @foreach($ingredients as $ingredient)
                                    @if($mealIngredient->id === $ingredient->id)
                                        <a href="{{ url('meal/ingredient/' . $ingredient->id) }}">{{ $ingredient->{'name_'.app()->getLocale()} }}</a>
                                    @endif
                                @endforeach
                            @endforeach
                            </h6>
                            <p class="card-text">
                                @foreach($meal->tags as $mealTag)
                                    @foreach($tags as $tag)
                                        @if($mealTag->id === $tag->id)
                                            <a href="{{ url('meal/tag/' . $tag->id) }}">{{ $tag->{'name_'.app()->getLocale()} }}</a>
                                        @endif
                                    @endforeach
                                @endforeach
                            </p>
                        </div>
                    </div>
                    @endforeach
                    {{ $meals->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
