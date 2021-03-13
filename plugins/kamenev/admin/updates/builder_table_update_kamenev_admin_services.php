<?php namespace Kamenev\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKamenevAdminServices extends Migration
{
    public function up()
    {
        Schema::table('kamenev_admin_services', function($table)
        {
            $table->string('category', 100);
            $table->string('title', 100);
            $table->dropColumn('type_service_id');
        });
    }
    
    public function down()
    {
        Schema::table('kamenev_admin_services', function($table)
        {
            $table->dropColumn('category');
            $table->dropColumn('title');
            $table->integer('type_service_id');
        });
    }
}
