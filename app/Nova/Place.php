<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\KeyValue;
use Mauricewijnia\NovaMapsAddress\MapsAddress;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Inspheric\Fields\Url;
use Laravel\Nova\Http\Requests\NovaRequest;

class Place extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Place::class;

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
            Text::make('Name')->sortable(),
            Boolean::make('Public Access', 'publicAccess'),
            Boolean::make('Is Accessible For Free', 'isAccessibleForFree'),
            Text::make('Alternative Name', 'alternativeName')->sortable(),
            Textarea::make('Description'),
            // Textarea::make('Disambiguating Description'),
            MapsAddress::make('address')
                ->zoom(4)
                ->center(['lat' => 38.850033, 'lng' => -87.6500523]),
            Text::make('Fax Number', 'faxNumber'),
            Text::make('Telephone'),
            Text::make('Slogan'),
            Url::make('Url'),
            Url::make('Tour Booking Page', 'tourBookingPage'),
            // KeyValue::make('Identifier')
            //     ->rules('json')
            //     ->keyLabel('Item') // Customize the key heading
            //     ->valueLabel('Label') // Customize the value heading
            //     ->actionText('Add Item'), // Customize the "add row" button text,
            // KeyValue::make('Same As')
            //     ->rules('json')
            //     ->keyLabel('Item') // Customize the key heading
            //     ->valueLabel('Label') // Customize the value heading
            //     ->actionText('Add Item'), // Customize the "add row" button text,
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
