<?php namespace Kamenev\Parseinstagram\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKamenevParseinstagramInfo extends Migration
{
    public function up()
    {
        Schema::create('kamenev_parseinstagram_info', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('base_url', 200)->default('https://graph.instagram.com/me/media?fields=');
            $table->string('refresh_url', 200)->default('https://graph.instagram.com/refresh_access_token?grant_type=ig_refresh_token&access_token=');
            $table->string('access_token', 200);
            $table->date('time_created');
            $table->smallInteger('expires_in');
            $table->smallInteger('count_posts')->default(5);
            $table->string('fields', 200)->default('id,media_type,media_url,permalink');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kamenev_parseinstagram_info');
    }
}
