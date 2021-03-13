<?php namespace Kamenev\Parseinstagram\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKamenevParseinstagramInfo extends Migration
{
    public function up()
    {
        Schema::table('kamenev_parseinstagram_info', function($table)
        {
            $table->string('access_token', 200)->nullable()->change();
            $table->date('time_created')->nullable()->change();
            $table->smallInteger('expires_in')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('kamenev_parseinstagram_info', function($table)
        {
            $table->string('access_token', 200)->nullable(false)->change();
            $table->date('time_created')->nullable(false)->change();
            $table->smallInteger('expires_in')->nullable(false)->change();
        });
    }
}
