<?php namespace Kamenev\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKamenevAdminSocials extends Migration
{
    public function up()
    {
        Schema::create('kamenev_admin_socials', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 200);
            $table->string('url', 200);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kamenev_admin_socials');
    }
}
