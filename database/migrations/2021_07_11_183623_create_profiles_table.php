<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('address')->nullable();
            $table->string('image')->nullable();
            $table->string('hari_buka', 10)->default('Senin');
            $table->string('hari_sampai', 10)->default('Jumat');
            $table->string('jam_buka', 10)->default('07:00');
            $table->string('jam_tutup', 10)->default('20:00');
            $table->string('whatsapp', 20)->nullable();
            $table->string('telephone', 20)->nullable();
            $table->text('message')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
