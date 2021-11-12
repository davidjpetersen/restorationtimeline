<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Country;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\KeyValue;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\BelongsToMany;
use Nikans\TextLinked\TextLinked;
// use Laravel\Nova\Fields\BelongsToMany;
use Inspheric\Fields\Url;
use Benjacho\BelongsToManyField\BelongsToManyField; 
use Laravel\Nova\Http\Requests\NovaRequest;
use App\Nova\Person; 
use App\Nova\Metrics\SourceCount;

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
            TextLinked::make('Title')->link($this)->sortable(),
            BelongsToManyField::make('Creators', 'creators', Person::class),
            Text::make('Publisher')->sortable(),
            Number::make('Copyright Year', 'copyrightYear')->min(1)->max(2500)->sortable(),
            Textarea::make('Abstract')->hideFromIndex(),
            Textarea::make('Description')->hideFromIndex(),
            Textarea::make('Text')->hideFromIndex(),
            Text::make('Publication')->hideFromIndex()->sortable(),
            Text::make('Publisher Imprint', 'publisherImprint')->hideFromIndex()->sortable(),
            Number::make('Page Count', 'pageCount')->min(1)->hideFromIndex()->sortable(),
            DateTime::make('Date Published', 'datePublished')->hideFromIndex()->sortable(),
            Text::make('Copyright Notice', 'copyrightNotice')->hideFromIndex()->sortable(),
            Text::make('Caption')->hideFromIndex()->sortable(),
            Textarea::make('Citation')->hideFromIndex()->sortable()->alwaysShow(),
            Text::make('Credit Text', 'creditText')->hideFromIndex()->sortable(),
            Url::make('Content URL', 'contentUrl')->hideFromIndex(),
            Url::make('Archived At', 'archivedAt')->hideFromIndex(),
            BelongsToMany::make('Events', 'events', 'App\Nova\Event')->hideFromIndex(),
            // Text::make('Headline')->hideFromIndex()->sortable(),
            // Text::make('Alternative Headline','alternativeHeadline')->hideFromIndex()->sortable(),
            // Textarea::make('Disambiguating Description'),
            // Textarea::make('About')->hideFromIndex()->sortable(),
            // Text::make('Embedded Text Caption', 'embeddedTextCaption')->hideFromIndex()->sortable(),
            // Number::make('Content Size', 'contentSize')->hideFromIndex()->sortable(),
            // Number::make('Duration')->min(0)->hideFromIndex()->sortable(),
            // DateTime::make('Start Time', 'startTime')->hideFromIndex()->sortable(),
            // DateTime::make('End Time', 'endTime')->hideFromIndex()->sortable(),
            // DateTime::make('Upload Date', 'uploadDate')->hideFromIndex()->sortable(),
            // Number::make('Height')->hideFromIndex()->min(1)->sortable(),
            // Number::make('Width')->hideFromIndex()->min(1)->sortable(),
            // Country::make('Country of Origin', 'countryOfOrigin')->hideFromIndex(),
            // Url::make('Discussion Url', 'discussionUrl')->hideFromIndex(),
            // BelongsToMany::make('Creators', 'creators', 'App\Nova\Person')->hideFromIndex(),
            File::make('Upload', 'uploadFile'),
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
        return [
            new SourceCount
        ];
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
        return [
            (new Actions\UpdateStatus)->confirmButtonText('Update Status'),
        ];
    }
}
