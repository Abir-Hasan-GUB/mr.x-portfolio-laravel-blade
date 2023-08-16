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
        Schema::create('seoproperties', function (Blueprint $table) {
            $table->id();
            $table->enum('pageName', ['home', 'resume', 'project', 'contact']);
            $table->string('title');
            $table->string('keywords');
            $table->string('description');
            $table->string('ogSiteName');
            $table->string('ogUrl');
            $table->string('ogTitle');
            $table->string('ogDescription');
            $table->string('ogImage');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seoproperties');
    }
};
