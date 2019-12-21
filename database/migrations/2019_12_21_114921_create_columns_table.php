<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColumnsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('columns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('row_id');
            $table->foreign('row_id')->references('id')->on('rows')->onDelete('cascade');
            $table->foreign('element_id')->references('id')->on('elements')->onDelete('cascade');
            $table->unsignedInteger('sorting')->default(0);
            $table->unsignedInteger('column_size')->default(12);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('columns');
    }
}
