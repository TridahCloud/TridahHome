<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateLaravelFulltextTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $connection = config('laravel-fulltext.db_connection') ?: config('database.default');

        Schema::connection($connection)->create('laravel_fulltext', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('indexable_id');
            $table->string('indexable_type');
            $table->text('indexed_title');
            $table->text('indexed_content');

            $table->unique(['indexable_type', 'indexable_id']);

            $table->timestamps();
        });

        $driver = DB::connection($connection)->getDriverName();

        if (in_array($driver, ['mysql', 'mariadb'])) {
            DB::connection($connection)->statement('ALTER TABLE laravel_fulltext ADD FULLTEXT fulltext_title(indexed_title)');
            DB::connection($connection)->statement('ALTER TABLE laravel_fulltext ADD FULLTEXT fulltext_title_content(indexed_title, indexed_content)');
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $connection = config('laravel-fulltext.db_connection') ?: config('database.default');

        Schema::connection($connection)->dropIfExists('laravel_fulltext');
    }
}
