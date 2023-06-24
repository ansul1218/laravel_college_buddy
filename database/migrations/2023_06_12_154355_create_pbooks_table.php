<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePbooksTable extends Migration
{
    public function up()
    {
        Schema::create('pbooks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('language');
            $table->string('file_path');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pbooks');
    }
}
