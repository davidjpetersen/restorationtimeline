<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('description');
            $table->text('disambiguatingDescription');
            $table->json('identifer');
            $table->json('sameAs');
            $table->dateTime('startDate');
            $table->dateTime('endDate');
            $table->bigInteger('parentID');
            $table->enum('status', ['Auto-Draft', 'Draft', 'Review', 'Published', 'Retired']);
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
        Schema::dropIfExists('events');
    }
}
