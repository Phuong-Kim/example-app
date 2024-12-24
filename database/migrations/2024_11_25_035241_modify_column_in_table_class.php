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
        Schema::table('class', function (Blueprint $table) {
            //
            $table->foreign('teacher_id') // Add foreign key constraint
                ->references('id')->on('teacher'); // Reference 'id' on 'users' table

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('table_class', function (Blueprint $table) {
            //
        });
    }
};
