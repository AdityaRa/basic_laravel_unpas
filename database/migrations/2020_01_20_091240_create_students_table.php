<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            // proses skema ini dibuat setelah kiuta sudah melakukan pembuatan php  (lanjut bawah)
            // artisan make:migration create_students_table
            $table->bigIncrements('id');
            $table->string('nomor_surat');
            
            $table->char('wajib_pajak')->unique();
            $table->string('ar')->unique();
            $table->timestamps();
            // setelah membuat skema dan php artisan migrate lakukanlah pembuatan model
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
