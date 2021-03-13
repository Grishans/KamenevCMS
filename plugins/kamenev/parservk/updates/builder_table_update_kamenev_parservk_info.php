<?php namespace Kamenev\Parservk\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKamenevParservkInfo extends Migration
{
    public function up()
    {
        Schema::table('kamenev_parservk_info', function($table)
        {
            $table->string('redirect_url', 200);
        });
    }
    
    public function down()
    {
        Schema::table('kamenev_parservk_info', function($table)
        {
            $table->dropColumn('redirect_url');
        });
    }
}
