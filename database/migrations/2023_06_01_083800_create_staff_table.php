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

        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nama_staff', 30);
            $table->string('username',25)->nullable()->uniqiue();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('no_telepon', 20);
            $table->rememberToken();
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
        Schema::table('table', function (Blueprint $table) {
            $table->dropColumn('username');
            $table->dropColumn('name');
            $table->dropColumn('email');
            $table->dropColumn('password');
        });
    }
};
