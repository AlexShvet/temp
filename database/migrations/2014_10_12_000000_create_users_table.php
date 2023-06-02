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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->integer('birthday');
            $table->boolean('hide');
            $table->boolean('thumbnail');
            $table->string('cn');
            $table->string('city');
            $table->string('note');
            $table->string('company_name');
            $table->string('company_type');
            $table->string('title');
            $table->string('department');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
