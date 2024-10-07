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
        Schema::create('ticket_tables', function (Blueprint $table) {
            $table->id();
            $table->date("tgl_berangkat")->insert();
            $table->string("tujuan");
            $table->string("asal");
            $table->string("nama_penumpang");
            $table->string("no_kursi");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_tables');
    }
};
