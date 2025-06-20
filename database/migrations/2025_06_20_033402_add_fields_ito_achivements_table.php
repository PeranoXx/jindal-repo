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
        Schema::table('achivements', function (Blueprint $table) {
            $table->dropColumn('description');
            $table->string('achivement_number')->nullable()->after('title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('achivements', function (Blueprint $table) {
            $table->text('description');
            $table->dropColumn('achivement_number');
        });
    }
};
