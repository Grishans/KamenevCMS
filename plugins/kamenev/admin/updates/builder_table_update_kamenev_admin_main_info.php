<?php namespace Kamenev\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKamenevAdminMainInfo extends Migration
{
    public function up()
    {
        Schema::table('kamenev_admin_main_info', function($table)
        {
            $table->string('phone', 20);
            $table->string('email', 256);
        });
    }
    
    public function down()
    {
        Schema::table('kamenev_admin_main_info', function($table)
        {
            $table->dropColumn('phone');
            $table->dropColumn('email');
        });
    }
}
