<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->unsignedBigInteger('team_id')->nullable();
    
            // If you have a foreign key relationship
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropForeign(['team_id']);
            $table->dropColumn('team_id');
        });
    }
    
};
