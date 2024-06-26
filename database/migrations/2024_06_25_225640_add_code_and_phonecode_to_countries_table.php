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
        Schema::table('countries', function (Blueprint $table) {
            $table->char('code', 3)->after('name'); // Adding code column after name
            $table->char('phonecode', 5)->after('code'); // Adding phonecode column after code
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('countries', function (Blueprint $table) {
            $table->dropColumn('code'); // Dropping code column
            $table->dropColumn('phonecode'); // Dropping phonecode column
        });
    }
};
