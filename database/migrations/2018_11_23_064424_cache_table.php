<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CacheTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cache', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('count_users');
            $table->integer('count_pending_users_requests');
            $table->integer('count_active_users');
            $table->integer('count_trashed_users');
            $table->integer('count_projects');
            $table->integer('count_pending_projects');
            $table->integer('count_active_projects');
            $table->integer('count_trashed_projects');
            $table->integer('count_comments');
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
        //
    }
}
