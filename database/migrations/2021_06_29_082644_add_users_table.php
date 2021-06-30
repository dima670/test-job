<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nick_name');
            $table->string('last_name');
            $table->string('avatar_path');
            $table->string('phone_number');
            $table->string('sex');
            $table->string('email_agree');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('nick_name');
            $table->dropColumn('name');
            $table->dropColumn('last_name');
            $table->dropColumn('avatar_path');
            $table->dropColumn('phone_number');
            $table->dropColumn('sex');
            $table->dropColumn('email_agree');
        });
    }
}
