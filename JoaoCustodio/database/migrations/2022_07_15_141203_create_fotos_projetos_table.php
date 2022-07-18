<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotos_projetos', function (Blueprint $table) {
            $table->id();
            $table->string('designacao');
            $table->string('caminho');
            $table->unsignedBigInteger('projeto_id');
            $table->timestamps();

            $table->foreign('projeto_id')
                ->references('id')
                ->on('projetos')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fotos_projetos');
    }
};
