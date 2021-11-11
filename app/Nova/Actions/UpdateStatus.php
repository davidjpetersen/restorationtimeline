<?php

namespace App\Nova\Actions;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Fields\Select;

class UpdateStatus extends Action
{
    use InteractsWithQueue, Queueable;

    /**
     * Perform the action on the given models.
     *
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @param  \Illuminate\Support\Collection  $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {

        $optionsArray = array('Auto-Draft', 'Draft', 'Review', 'Published', 'Retired');
        $selectedOption = $optionsArray[intval($fields->status)];
        foreach ($models as $model) {
            $model->status = $selectedOption;
            $model->save();
        }

        return Action::message("Updated status to $selectedOption");
    }

    /**
     * Get the fields available on the action.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Select::make('Status', 'status')->options(['Auto-Draft', 'Draft', 'Review', 'Published', 'Retired']),
        ];
    }
}
