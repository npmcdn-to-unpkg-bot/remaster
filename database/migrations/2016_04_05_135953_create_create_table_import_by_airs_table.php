<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreateTableImportByAirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_table_import_by_airs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('origin');
            $table->timestamp('etd');
            $table->timestamp('eta_port');
            $table->timestamp('eta_aiia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('create_table_import_by_airs');
    }
}
