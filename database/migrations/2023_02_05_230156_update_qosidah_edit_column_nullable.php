<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateQosidahEditColumnNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('qosidahs', function (Blueprint $table) {
            $table->string('title_latin')->nullable()->change();
            $table->string('title_translate')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('qosidahs', function (Blueprint $table) {
            $table->string('title_latin')->nullable(false)->change();
            $table->string('title_translate')->nullable(false)->change();
        });
    }
}
