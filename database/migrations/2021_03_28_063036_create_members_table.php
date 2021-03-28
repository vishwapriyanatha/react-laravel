<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('url')->nullable();
            $table->string('external_id')->nullable();
            $table->string('name')->nullable();
            $table->string('alias')->nullable();
            $table->string('active')->nullable();
            $table->string('verified')->nullable();
            $table->string('shared')->nullable();
            $table->string('locale')->nullable();
            $table->string('timezone')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('signature')->nullable();
            $table->integer('organization_id')->nullable();
            $table->string('tags')->nullable();
            $table->string('suspended')->nullable();
            $table->string('role')->nullable();
            $table->timestamp('last_login_at')->nullable();
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
        Schema::dropIfExists('members');
    }
}
