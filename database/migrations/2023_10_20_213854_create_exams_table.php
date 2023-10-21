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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable()->default(null);
            $table->string('title');
            $table->text('description')->nullable();
            $table->date('exam_date');
            $table->time('exam_time');
            // Add more columns for additional exam information as needed
            $table->timestamps();
        
            $table->foreign('user_id')->references('id')->on('students');
        });        
    } 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
