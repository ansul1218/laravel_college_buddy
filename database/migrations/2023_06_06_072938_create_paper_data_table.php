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
        Schema::create('paper_data', function (Blueprint $table) {

            $table->id('paper_id');//primary key
            $table->string('paper_name',40);
            $table->string('branch_name',10);
            $table->string('system_name',8);
            $table->integer('semester_name');
            $table->integer('year_name');
            $table->string('filepath');
            $table->timestamps();//created at updated at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paper_data');
    }
};
