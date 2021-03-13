<?php namespace Kamenev\Parservk\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKamenevParservkInfo extends Migration
{
    public function up()
    {
        Schema::create('kamenev_parservk_info', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('client_id', 10);
            $table->string('vk_user_id', 20)->nullable();
            $table->string('name', 100)->default('Иван Каменев');
            $table->string('screen_name', 100)->default('kamenev_tv');
            $table->string('client_secret', 50);
            $table->string('service_key', 100);
            $table->string('auth_url', 200)->default('https://oauth.vk.com/');
            $table->string('access_token', 200)->nullable();
            $table->date('time_created')->nullable();
            $table->smallInteger('expires_in')->nullable();
            $table->string('version_api', 10)->default('5.52');
            $table->smallInteger('count_posts')->default(5);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kamenev_parservk_info');
    }
}
