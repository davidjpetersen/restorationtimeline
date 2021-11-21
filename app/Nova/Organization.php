<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\DateTime;
use Nikans\TextLinked\TextLinked;
use Mauricewijnia\NovaMapsAddress\MapsAddress;
use App\Nova\Metrics\OrganizationCount;
use Laravel\Nova\Http\Requests\NovaRequest;

class Organization extends Resource
{

    public static $label = 'Organizations';
    public static $singularLabel = 'Organization';
    
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Organization::class;

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
            TextLinked::make('Name')
                ->link($this)
                ->sortable(),
            Text::make('Alternative Name', 'alternativeName'),
            Textarea::make('Description')
                ->hideFromIndex(),
            Textarea::make('Disambiguating Description', 'disambiguatingDescription')
                ->hideFromIndex(),
            Textarea::make('Text')->hideFromIndex(),
            MapsAddress::make('Address', 'address')
                ->zoom(4)
                ->center(['lat' => 38.850033, 'lng' => -87.6500523])
                ->hideFromIndex(),
            DateTime::make('Founding Date', 'foundingDate')
                ->hideFromIndex()
                ->sortable(),
            MapsAddress::make('Founding Location', 'foundingLocation')
                ->zoom(4)
                ->center(['lat' => 38.850033, 'lng' => -87.6500523])
                ->hideFromIndex()
                ->mapOptions(['mapId' => 'foundingLocation']),
            DateTime::make('Dissolution Date', 'dissolutionDate')
                ->hideFromIndex()
                ->sortable(),
            MapsAddress::make('Dissolution Location', 'dissolutionLocation')
                ->zoom(4)
                ->center(['lat' => 38.850033, 'lng' => -87.6500523])
                ->hideFromIndex()
                ->mapOptions(['mapId' => 'dissolutionLocation']),
            Text::make('Fax Number', 'faxNumber')
                ->hideFromIndex()
                ->sortable(),
            Text::make('Email', 'email')
                ->hideFromIndex()
                ->sortable(),
            Text::make('Telephone', 'telephone')
                ->hideFromIndex()
                ->sortable(),
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
            new OrganizationCount,
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
