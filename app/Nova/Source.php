<?php

namespace App\Nova;

use App\Nova\Event;
use App\Nova\Person; 
use App\Nova\Metrics\SourceCount;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;

use Laravel\Nova\Fields\BelongsToMany;
use Benjacho\BelongsToManyField\BelongsToManyField; 
use Laravel\Nova\Fields\Country;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\KeyValue;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Nikans\TextLinked\TextLinked;

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
            Select::make('Status', 'status')->options(['Auto-Draft', 'Draft', 'Review', 'Published', 'Retired']),
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
            Text::make('Content URL', 'contentUrl')->withMeta(['extraAttributes' => ['type' => 'url']]),
            Text::make('Archived At', 'archivedAt')->withMeta(['extraAttributes' => ['type' => 'url']]),
            BelongsToManyField::make('Events', 'events', Event::class)->hideFromIndex(),
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
