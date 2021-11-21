<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\KeyValue;
use Mauricewijnia\NovaMapsAddress\MapsAddress;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Stack;
use Laravel\Nova\Fields\Line;
use App\Nova\Metrics\PlaceCount;
use Laravel\Nova\Http\Requests\NovaRequest;

class Place extends Resource
{

    public static $label = 'Places';
    public static $singularLabel = 'Place';

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
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'name',
        'description',
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
            Text::make('Name')->sortable(),
            Boolean::make('Public Access', 'publicAccess')->hideFromIndex(),
            Boolean::make('Is Accessible For Free', 'isAccessibleForFree')->hideFromIndex(),
            Text::make('Alternative Name', 'alternativeName')->sortable()->hideFromIndex(),
            Textarea::make('Description')->hideFromIndex(),
            // Textarea::make('Disambiguating Description'),
            MapsAddress::make('Address', 'address')
                ->zoom(4)
                ->center(['lat' => 38.850033, 'lng' => -87.6500523])->hideFromIndex(),
            Stack::make('Address', [
                Line::make('Address')->asHeading()->resolveUsing(function () {
                    $address = $this->resource->address["formatted_address"];
                    $firstComma = strpos($address, ",");
                    return substr($this->resource->address["formatted_address"], 0, $firstComma);
                }),
                Line::make('Address')->resolveUsing(function () {
                    $address = $this->resource->address["formatted_address"];
                    $firstComma = strpos($address, ",")+2;
                    return substr($this->resource->address["formatted_address"], $firstComma);
                }),
            ])->onlyOnIndex(),
            Text::make('Fax Number', 'faxNumber')->hideFromIndex(),
            Text::make('Telephone')->hideFromIndex(),
            Text::make('Slogan')->hideFromIndex(),
            Text::make('Url')->withMeta(['extraAttributes' => ['type' => 'url']])->hideFromIndex(),
            Text::make('Tour Booking Page', 'tourBookingPage')->withMeta(['extraAttributes' => ['type' => 'url']])->hideFromIndex(),
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
        return [
            new PlaceCount,
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
