<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('honorificPrefix')->nullable();
            $table->string('givenName')->nullable();
            $table->string('additionalName')->nullable();
            $table->string('familyName')->nullable();
            $table->string('honorificSuffix')->nullable();
            $table->string('maidenName')->nullable();
            $table->string('alsoKnownAs')->nullable();
            $table->string('address')->nullable();
            $table->string('affiliation')->nullable();
            $table->string('alumniOf')->nullable();
            $table->dateTime('birthDate')->nullable();
            $table->string('birthPlace')->nullable();
            $table->dateTime('deathDate')->nullable();
            $table->string('deathPlace')->nullable();
            $table->string('email')->nullable();
            $table->string('telephone')->nullable();
            $table->string('faxNumber')->nullable();
            $table->string('gender')->nullable();
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->json('identifier')->nullable();
            $table->json('sameAs')->nullable();
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
        Schema::dropIfExists('people');
    }
}
