<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allocations', function (Blueprint $table) {
            $table->integer('developer_id')->unsigned();
            $table->integer('project_id')->unsigned();
            $table->integer('hours_per_week');

            $table->foreign('developer_id')->references('id')->on('developers');
            $table->foreign('project_id')->references('id')->on('projects');
            $table->primary(['project_id', 'developer_id']);

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
        Schema::dropIfExists('allocations');
    }
}
