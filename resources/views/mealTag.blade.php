@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @foreach($meals as $meal)
                        @foreach($meal->tags as $mealTag)
                            @if($mealTag->id == $tag_id)
                                <p>{{ $meal->{'title_'.app()->getLocale()} }}</p>
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
