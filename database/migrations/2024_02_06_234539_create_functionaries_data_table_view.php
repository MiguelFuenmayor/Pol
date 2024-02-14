<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        
            DB::statement("CREATE OR REPLACE VIEW functionaries_data_table 
            AS SELECT functionaries.surnames AS 'surnames',
            functionaries.names AS 'names', functionaries.credential AS 'credential',
            functionaries.identity_document AS 'identity_document',
            dependencies.name AS 'dependency',
            ranks.name AS 'rank',
            weapons.weapon_type AS 'weapon_type',
            genders.gender AS 'gender' 
            FROM functionaries
            INNER JOIN 
            dependencies ON functionaries.dependency_id = dependencies.id
            INNER JOIN ranks ON functionaries.rank_id = ranks.id
            INNER JOIN weapons ON weapons.functionary_id = functionaries.id
            INNER JOIN genders ON
            functionaries.gender_id = genders.id;");
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    DB::statement('DROP VIEW IF EXISTS functionaries_data_table');
    }
};
