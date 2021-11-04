<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('alternativeName')->nullable();
            $table->text('description')->nullable();
            $table->text('disambiguatingDescription')->nullable();
            $table->json('address')->nullable();
            $table->text('geo')->nullable();
            $table->string('faxNumber')->nullable();
            $table->string('telephone')->nullable();
            $table->string('hasMap')->nullable();
            $table->boolean('isAccessibleForFree')->nullable();
            $table->string('latitude')->nullable();
            $table->string('logitude')->nullable();
            $table->string('logo')->nullable();
            $table->bigInteger('maximumAttendeeCapacity')->nullable();
            $table->text('openingHoursSpecification')->nullable();
            $table->boolean('publicAccess')->nullable();
            $table->string('slogan')->nullable();
            $table->string('tourBookingPage')->nullable();
            $table->string('url')->nullable();
            $table->text('identifier')->nullable();
            $table->text('sameAs')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('places');
    }
}
