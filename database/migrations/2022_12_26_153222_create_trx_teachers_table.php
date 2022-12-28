<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrxTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trx_teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('m_class_id')->constrained();
            $table->string('email')->unique();
            $table->string('image');
            $table->string('fullname');
            $table->string('institution');
            $table->string('study_program');
            $table->string('graduation_year');
            $table->string('subjects');
            $table->string('teaching_class');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trx_teachers');
    }
}
