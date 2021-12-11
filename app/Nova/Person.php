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
use App\Nova\Metrics\PersonCount;
use Laravel\Nova\Http\Requests\NovaRequest;
use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;

class Person extends Resource
{

    public static $label = 'People';
    public static $singularLabel = 'Person';
    
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
            Text::make('Wikidata'),
            Text::make('Honorific Prefix', 'honorificPrefix')->onlyOnForms(),
            Text::make('Full Name')->sortable()->showOnIndex()->showOnDetail(),
            Text::make('Given Name', 'givenName')->sortable()->onlyOnForms(),
            Text::make('Additional Name', 'additionalName')->sortable()->onlyOnForms(),
            Text::make('Family Name', 'familyName')->sortable()->onlyOnForms(),
            Text::make('Maiden Name', 'maidenName')->sortable()->onlyOnForms(),
            Text::make('Also Known As', 'alsoKnownAs')->sortable()->onlyOnForms(),
            Text::make('Honorific Suffix', 'honorificSuffix')->sortable()->onlyOnForms(),
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
            (new Actions\EnhancePerson)->confirmButtonText('Enhance Person')->onlyOnDetail(),
            (new Actions\MergeItems)->confirmButtonText('Merge People'),
            (new Actions\UpdateStatus)->confirmButtonText('Update Status'),
            new DownloadExcel,
        ];
    }
}
