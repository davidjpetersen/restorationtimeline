<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('alternativeName')->nullable();
            $table->text('description')->nullable();
            $table->text('disambiguatingDescription')->nullable();
            $table->text('address')->nullable();
            $table->dateTime('foundingDate')->nullable();
            $table->string('foundingLocation');
            $table->dateTime('dissolutionDate')->nullable();
            $table->string('dissolutionLocation');
            $table->string('faxNumber')->nullable();
            $table->string('email')->nullable();
            $table->string('telephone')->nullable();
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
        Schema::dropIfExists('organizations');
    }
}
