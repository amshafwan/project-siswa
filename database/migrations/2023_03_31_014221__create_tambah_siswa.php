<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tambahs', function (Blueprint $table) {
            $table->id();
            $table->string("nama")->nullable();
            $table->string("kelas")->nullable();
            $table->string("jurusan")->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tambahs');
    }
};