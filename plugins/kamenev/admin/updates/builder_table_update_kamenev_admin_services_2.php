<?php namespace Kamenev\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKamenevAdminServices2 extends Migration
{
    public function up()
    {
        Schema::table('kamenev_admin_services', function($table)
        {
            $table->smallInteger('order')->default(1);
        });
    }
    
    public function down()
    {
        Schema::table('kamenev_admin_services', function($table)
        {
            $table->dropColumn('order');
        });
    }
}
