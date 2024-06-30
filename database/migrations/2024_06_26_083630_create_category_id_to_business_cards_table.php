<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryIdToBusinessCardsTable extends Migration
{
    public function up()
    {
        Schema::table('business_cards', function (Blueprint $table) {
            $table->foreignId('category_id')->nullable()->constrained('business_card_categories')->after('linkedin');
        });
    }


    public function down()
    {
        Schema::table('business_cards', function (Blueprint $table) {
            $table->dropColumn('category_id');
        });
    }
}
