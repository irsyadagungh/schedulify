<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    /**
     * table utama untuk schedule project
     * memiliki 1 table tamu = notifikasi_schedule_project
     * memiliki 3 table tamu weak = schedule project_list_task, schedule_project_list_member, schedule_project_history
     */

    public function up(): void
    {
        Schema::create('schedule_project', function (Blueprint $table) {
            $table->id();

            // add foreignkey users
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');

            // informasi schedule project
            $table->string('judul','50');
            $table->string('deskripsi');

            // identitas schedule untuk member join room
            $table->string('room_code','10');

            // log
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedule_project');
    }
};
