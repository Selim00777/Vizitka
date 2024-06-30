<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialMediaTable extends Migration
{
    public function up()
    {
        Schema::create('social_media', function (Blueprint $table) {
            $table->id();
            $table->foreignId('business_card_id')->constrained('business_cards')->onDelete('cascade');
            $table->string('platform');
            $table->string('url');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('social_media');
    }
}
