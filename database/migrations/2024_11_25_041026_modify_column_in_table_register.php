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
        Schema::table('register', function (Blueprint $table) {
            $table->foreign('student_id') // Add foreign key constraint
                ->references('id')->on('student');
            $table->foreign('class_id') // Add foreign key constraint
                ->references('id')->on('class');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('table_register', function (Blueprint $table) {
            //
        });
    }
};
