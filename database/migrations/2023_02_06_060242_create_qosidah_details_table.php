<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQosidahDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qosidah_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('qosidah_id');
            $table->foreign('qosidah_id')
                ->references('id')
                ->on('qosidahs')
                ->onDelete('cascade');
            $table->integer('line');
            $table->string('lyric');
            $table->string('lyric_latin')->nullable();
            $table->string('lyric_translate')->nullable();
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
        Schema::dropIfExists('qosidah_details');
    }
}
