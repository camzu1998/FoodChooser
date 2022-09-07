@extends('layouts.app')

@section('content')
    <div class="header py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">{{ __('Welcome!') }}</h1>
                        <p class="text-lead text-light">
                            {{ __('Choose a meal and randomize from the default dishes') }}
                        </p>
                        <div class="row" style="align-items: center;">
                            <div class="col">
                                <div class="form-group">
                                    <label for="MealSelect">{{ __('Meals') }}</label>
                                    <select class="form-control" id="MealSelect">
                                        <option>{{ __('Breakfast') }}</option>
                                        <option>{{ __('Lunch') }}</option>
                                        <option>{{ __('Dinner') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <button class="btn btn-primary btn-round">
                                    <i class="tim-icons icon-refresh-02"></i> {{ __('Draw') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
