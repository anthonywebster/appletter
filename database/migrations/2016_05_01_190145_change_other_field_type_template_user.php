<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeOtherFieldTypeTemplateUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('template_users', function (Blueprint $table) {

            $table->dropColumn('content');

        });

        Schema::table('template_users', function (Blueprint $table) {
            
            $table->mediumText('content')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('template_users', function (Blueprint $table) {
            //
        });
    }
}
