<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->string('id');
            $table->string('url')->nullable();
            $table->string('external_id')->nullable();
            $table->string('type')->nullable();
            $table->string('subject')->nullable();
            $table->text('description')->nullable();
            $table->string('priority')->nullable();
            $table->string('status')->nullable();
            $table->integer('submitter_id')->nullable();
            $table->integer('assignee_id')->nullable();
            $table->integer('organization_id')->nullable();
            $table->string('tags')->nullable();
            $table->string('has_incidents')->nullable();
            $table->string('via')->nullable();
            $table->timestamp('due_at')->nullable();
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
        Schema::dropIfExists('tickets');
    }
}
