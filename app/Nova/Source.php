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
// use Laravel\Nova\Fields\BelongsToMany;
use Inspheric\Fields\Url;
use Juul\Fields\BelongsToMany;  
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
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'title',
        'headline',
        'alternativeHeadline',
        'abstract',
        'description',
        'publisher',
        'publication',
        'text',
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
            // ID::make('id')->sortable(),
            Text::make('Title')->sortable(),
            Text::make('Headline')->sortable(),
            Text::make('Alternative Headline','alternativeHeadline')->sortable(),
            Textarea::make('Abstract'),
            Textarea::make('Description'),
            // Textarea::make('Disambiguating Description'),
            Textarea::make('Text'),

            Text::make('Publisher')->sortable(),
            Text::make('Publication')->sortable(),
            Text::make('Publisher Imprint', 'publisherImprint')->sortable(),
            Number::make('Page Count', 'pageCount')->min(1)->sortable(),
            DateTime::make('Date Published', 'datePublished')->sortable(),
            Text::make('Copyright Notice', 'copyrightNotice')->sortable(),
            Textarea::make('Citation')->sortable(),
            Number::make('Copyright Year', 'copyrightYear')->min(1)->max(2500)->sortable(),

            Textarea::make('About')->sortable(),
            Text::make('Caption')->sortable(),
            Text::make('Embedded Text Caption', 'embeddedTextCaption')->sortable(),

            Number::make('Content Size', 'contentSize')->sortable(),
            Number::make('Duration')->min(0)->sortable(),
            DateTime::make('Start Time', 'startTime')->sortable(),
            DateTime::make('End Time', 'endTime')->sortable(),
            DateTime::make('Upload Date', 'uploadDate')->sortable(),
            Number::make('Height')->min(1)->sortable(),
            Number::make('Width')->min(1)->sortable(),
            Country::make('Country of Origin', 'countryOfOrigin'),
            Text::make('Credit Text', 'creditText')->sortable(),
            Url::make('Content URL', 'contentUrl'),
            Url::make('Archived At', 'archivedAt'),
            // Url::make('Discussion Url', 'discussionUrl'),
            // BelongsToMany::make('Creators', 'creators', 'App\Nova\Person'),
            BelongsToMany::make('Creators', 'creators', \App\Nova\Person::class),

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
