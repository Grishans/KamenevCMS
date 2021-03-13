<?php namespace Kamenev\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKamenevAdminMainInfo2 extends Migration
{
    public function up()
    {
        Schema::table('kamenev_admin_main_info', function($table)
        {
            $table->string('name', 50);
        });
    }
    
    public function down()
    {
        Schema::table('kamenev_admin_main_info', function($table)
        {
            $table->dropColumn('name');
        });
    }
}
