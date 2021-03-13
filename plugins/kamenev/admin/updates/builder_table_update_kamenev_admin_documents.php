<?php namespace Kamenev\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKamenevAdminDocuments extends Migration
{
    public function up()
    {
        Schema::table('kamenev_admin_documents', function($table)
        {
            $table->string('name_2', 200);
            $table->renameColumn('name', 'name_1');
        });
    }
    
    public function down()
    {
        Schema::table('kamenev_admin_documents', function($table)
        {
            $table->dropColumn('name_2');
            $table->renameColumn('name_1', 'name');
        });
    }
}
