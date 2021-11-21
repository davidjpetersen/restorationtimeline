<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Juul\Fields\BelongsToMany;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Stack;
use App\Nova\Source;
use App\Nova\Person;
use App\Nova\Metrics\EventCount;
use Laravel\Nova\Http\Requests\NovaRequest;

class Event extends Resource
{

    public static $label = 'People';
    public static $singularLabel = 'Person';

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Event::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'name',
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
            Textarea::make('Event Name', 'name')->alwaysShow(),
            
            // ->resolveUsing(function () {
            //     return Str::limit($this->resource->name, 30);
            // }),

            Markdown::make('Description', 'description')->sortable(),
            Stack::make('Start/End', [
                Date::make('Start Date', 'startDate'),
                Date::make('End Date', 'endDate'),
            ]),

            Date::make('Start Date', 'startDate')->onlyOnForms(),
            Date::make('End Date', 'endDate')->onlyOnForms(),

            BelongsToMany::make('Sources', 'sources', Source::class)
            ->fields(function() {
                return [
                    Text::make('Page Number', 'pageNumber'),   
                ];
            })
            ->fillUsing(function($pivots) {
                return $pivots;
            }) 
            ->pivots(),
            BelongsToMany::make('People', 'people', Person::class),

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
            new EventCount,
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
