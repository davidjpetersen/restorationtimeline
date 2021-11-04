<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sources', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('caption')->nullable();
            $table->string('embeddedTextCaption')->nullable();
            $table->string('exifData')->nullable();
            $table->string('bitrate')->nullable();
            $table->string('contentSize')->nullable();
            $table->string('contentUrl')->nullable();
            $table->bigInteger('duration')->nullable();
            $table->string('embedUrl')->nullable();
            $table->string('encodingFormat')->nullable();
            $table->time('endTime')->nullable();
            $table->bigInteger('height')->nullable();
            $table->string('playerType')->nullable();
            $table->string('productionCompany')->nullable();
            $table->string('regionsAllowed')->nullable();
            $table->time('startTime')->nullable();
            $table->dateTime('uploadDate')->nullable();
            $table->bigInteger('width')->nullable();
            $table->string('about')->nullable();
            $table->string('abstract')->nullable();
            $table->string('accessMode')->nullable();
            $table->string('accessibilityAPI')->nullable();
            $table->string('accessibilityControl')->nullable();
            $table->string('accessibilityFeatured')->nullable();
            $table->string('accessibilityHazard')->nullable();
            $table->string('accessibilitySummary')->nullable();
            $table->string('acquireLicensePage')->nullable();
            $table->string('archivedAt')->nullable();
            $table->string('audio')->nullable();
            $table->string('citation')->nullable();
            $table->string('copyrightNotice')->nullable();
            $table->string('copyrightYear')->nullable();
            $table->string('countryOfOrigin')->nullable();
            $table->string('creditText')->nullable();
            $table->dateTime('datePublished')->nullable();
            $table->string('discussionUrl')->nullable();
            $table->string('generate')->nullable();
            $table->string('alternativeHeadline')->nullable();
            $table->string('headline')->nullable();
            $table->string('inLanguage')->nullable();
            $table->boolean('isFamilyFriendly')->nullable();
            $table->string('keywords')->nullable();
            $table->string('publication')->nullable();
            $table->string('publisher')->nullable();
            $table->bigInteger('pageCount')->nullable();
            $table->string('publisherImprint')->nullable();
            $table->string('text')->nullable();
            $table->string('thumbnailUrl')->nullable();
            $table->bigInteger('timeRequired')->nullable();
            $table->bigInteger('version')->nullable();
            $table->string('description')->nullable();
            $table->string('disambiguatingDescription')->nullable();
            $table->json('identifier')->nullable();
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
        Schema::dropIfExists('sources');
    }
}
