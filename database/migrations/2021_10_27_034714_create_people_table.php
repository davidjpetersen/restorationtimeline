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
            $table->dateTimeTz('birthDate')->nullable();
            $table->string('birthPlace')->nullable();
            $table->dateTimeTz('deathDate')->nullable();
            $table->string('deathPlace')->nullable();
            $table->string('email')->nullable();
            $table->string('telephone')->nullable();
            $table->string('faxNumber')->nullable();
            $table->string('gender')->nullable();
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->string('wikidata')->nullable();
            $table->json('sameAs')->nullable();
            $table->enum('status', ['Auto-Draft', 'Draft', 'Review', 'Published', 'Retired'])->nullable();
            $table->timestamps();
            $table->softDeletes();
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
