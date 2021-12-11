<?php

namespace App\Nova;

use Illuminate\Http\Request;

use App\Nova\Event;
use App\Nova\Organization;
use App\Nova\Person;
use App\Nova\Place;
use App\Nova\Source;

use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\MorphTo;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Http\Requests\NovaRequest;
use Yna\NovaSwatches\Swatches;
use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;

class CarouselItem extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\CarouselItem::class;

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

            BelongsTo::make('Carousel')->searchable(),
            MorphTo::make('Carouselable')->types([
                Event::class,
                Organization::class,
                Person::class,
                Place::class,
                Source::class,
            ])->searchable(),
            Text::make('Title'),
            Text::make('Subtitle'),
            Swatches::make('Color')->colors(['#005370', '#599286','#e05e1b', '#e8ab98', '#f19e20']),
            Image::make('Image')->disk('s3'),
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
        return [
            new DownloadExcel, 
        ];
    }
}
