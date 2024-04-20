<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // テーブルを追加
    public function up(): void
    {
        Schema::table('contact_forms', function (Blueprint $table) {
            $table->string('tittle',50)->after('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    // テーブルを削除
    public function down(): void
    {
        Schema::table('contact_forms', function (Blueprint $table) {
            $table->dropColumn('tittle');
        });
    }
};
