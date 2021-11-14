<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\KeyValue;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Nikans\TextLinked\TextLinked;
use App\Nova\Metrics\PersonCount;
use Laravel\Nova\Http\Requests\NovaRequest;

class Person extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Person::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'fullName';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'givenName',
        'familyName',
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
            Text::make('Honorific Prefix', 'honorificPrefix')->hideFromIndex(),
            TextLinked::make('Full Name')->link($this)->sortable()->exceptOnForms(),
            Text::make('Given Name', 'givenName')->sortable()->hideFromIndex(),
            Text::make('Additional Name', 'additionalName')->sortable()->hideFromIndex(),
            Text::make('Family Name', 'familyName')->sortable()->hideFromIndex(),
            Text::make('Maiden Name', 'maidenName')->sortable()->hideFromIndex(),
            Text::make('Also Known As', 'alsoKnownAs')->sortable()->hideFromIndex(),
            Text::make('Honorific Suffix', 'honorificSuffix')->sortable()->hideFromIndex(),
            Text::make('Affiliation')->sortable()->hideFromIndex(),
            Date::make('Birth Date', 'birthDate')->sortable(),
            Date::make('Death Date', 'deathDate')->sortable(),
            Text::make('Birth Place', 'birthPlace')->sortable()->hideFromIndex(),
            Text::make('Death Place', 'deathPlace')->sortable()->hideFromIndex(),
            Text::make('Email')->sortable()->hideFromIndex(),
            Text::make('Telephone')->sortable()->hideFromIndex(),
            Text::make('Fax Number', 'faxNumber')->sortable()->hideFromIndex(),
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
            new PersonCount,
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
            (new Actions\EnhancePerson)->confirmButtonText('Enhance Person'),
            (new Actions\MergeItems)->confirmButtonText('Merge People'),
            (new Actions\UpdateStatus)->confirmButtonText('Update Status'),
        ];
    }
}
