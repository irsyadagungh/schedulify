<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('notifikasi_schedule_project', function (Blueprint $table) {
            $table->id();

             // add foreignkey users
             $table->unsignedBigInteger('id_user');
             $table->foreign('id_user')->references('id')->on('users');

              // add foreignkey users
            $table->unsignedBigInteger('id_schedule_project');
            $table->foreign('id_schedule_project')->references('id')->on('schedule_project');

             // informasi schedule project
             $table->string('judul','50');
             $table->string('deskripsi');
             $table->string('tanggal_deadline');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifikasi_schedule_project');
    }
};
