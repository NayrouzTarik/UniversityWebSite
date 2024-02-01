<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('selected_documents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('status')->default('EN COURS');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('selected_documents');
    }
};
