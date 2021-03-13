<?php namespace Kamenev\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKamenevAdminDocuments extends Migration
{
    public function up()
    {
        Schema::create('kamenev_admin_documents', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 200);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kamenev_admin_documents');
    }
}
