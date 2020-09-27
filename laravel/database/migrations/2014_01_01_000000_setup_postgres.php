<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;

class SetupPostgres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(sprintf('CREATE SCHEMA IF NOT EXISTS "%s"', config('database.connections.pgsql.schema')));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement(sprintf('DROP SCHEMA IF EXISTS "%s" CASCADE', config('database.connections.pgsql.schema')));
    }
}
