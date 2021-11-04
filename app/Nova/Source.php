<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Country;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\KeyValue;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Inspheric\Fields\Url;
use Laravel\Nova\Http\Requests\NovaRequest;

class Source extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Source::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make('id')->sortable(),
            Text::make('Title')->sortable(),
            Text::make('Headline')->sortable(),
            Text::make('Alternative Headline')->sortable(),
            Textarea::make('Abstract'),
            Textarea::make('Description'),
            // Textarea::make('Disambiguating Description'),
            Textarea::make('Text'),

            Text::make('Publisher')->sortable(),
            Text::make('Publication')->sortable(),
            Text::make('Publisher Imprint')->sortable(),
            Number::make('Page Count')->min(1)->sortable(),
            DateTime::make('Date Published')->sortable(),
            Text::make('Copyright Notice')->sortable(),
            Textarea::make('Citation')->sortable(),
            Number::make('Copyright Year')->min(1)->max(2500)->sortable(),

            Textarea::make('About')->sortable(),
            Text::make('Caption')->sortable(),
            Text::make('Embedded Text Caption')->sortable(),

            Number::make('Content Size')->sortable(),
            Number::make('Duration')->min(0)->sortable(),
            DateTime::make('Start Time')->sortable(),
            DateTime::make('End Time')->sortable(),
            DateTime::make('Upload Date')->sortable(),
            Number::make('Height')->min(1)->sortable(),
            Number::make('Width')->min(1)->sortable(),
            Country::make('Country of Origin', 'countryOfOrigin'),
            Text::make('Credit Text')->sortable(),
            Url::make('Content URL'),
            Url::make('Archived At'),
            Url::make('Discussion Url'),

        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
