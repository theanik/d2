<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('clipping_path')->nullable();
            $table->string('multi_clipping_path')->nullable();
            $table->string('image_masking')->nullable();
            $table->string('photo_retouching')->nullable();
            $table->string('ghost_mannequin')->nullable();
            $table->string('dropdown_shadow')->nullable();
            $table->string('reflection_shadow')->nullable();
            $table->string('color_variants')->nullable();
            $table->string('vactor_convartion')->nullable();
            $table->string('brightness_enhencement')->nullable();
            $table->string('ecomerce_image_editing')->nullable();
            $table->string('image_restarted')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('quantity');
            $table->string('sellection');
            $table->text('details_instraction');
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
        Schema::dropIfExists('quotes');
    }
}
