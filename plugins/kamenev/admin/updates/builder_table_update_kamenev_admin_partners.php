<?php namespace Kamenev\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKamenevAdminPartners extends Migration
{
    public function up()
    {
        Schema::table('kamenev_admin_partners', function($table)
        {
            $table->smallInteger('orientation');
        });
    }
    
    public function down()
    {
        Schema::table('kamenev_admin_partners', function($table)
        {
            $table->dropColumn('orientation');
        });
    }
}
