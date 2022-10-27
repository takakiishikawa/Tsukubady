<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('selection_stages', function (Blueprint $table) {
            $table->boolean('apply')->nullable()->change();
            $table->string('apply_job')->nullable()->change();
            $table->string('evaluation')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('selection_stages', function (Blueprint $table) {
            //
        });
    }
};
