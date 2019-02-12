<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Projects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_type_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
            $table->string('title');
            $table->string('description');
            $table->string('budget');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('url');
            $table->string('images');//array of images
            $table->string('project_description');
            $table->string('status');
            $table->string('admin_action');
            $table->string('required_bid_amount');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('project_type_id')
                ->references('id')
                ->on('project_type')
                ->onDelete('cascade');

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
