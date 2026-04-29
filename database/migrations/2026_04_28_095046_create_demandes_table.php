<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('demandes', function (Blueprint $table) {
          
            $table->dropColumn(['numTel', 'email']);
            
            $table->integer('nombre_places')->default(1)->after('message');
            
            $table->string('voyages')->after('nombre_places');
        });
    }

    public function down(): void
    {
        Schema::table('demandes', function (Blueprint $table) {
            $table->string('numTel')->after('nomComplet');
            $table->string('email')->nullable()->after('numTel');
            
            $table->dropColumn(['nombre_places', 'voyages']);
        });
    }
};