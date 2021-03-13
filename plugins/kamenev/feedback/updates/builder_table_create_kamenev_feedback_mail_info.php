<?php namespace Kamenev\Feedback\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKamenevFeedbackMailInfo extends Migration
{
    public function up()
    {
        Schema::create('kamenev_feedback_mail_info', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->smallInteger('port');
            $table->string('encryption', 3);
            $table->string('email', 256);
            $table->string('password', 256);
            $table->string('driver', 10);
            $table->string('host', 100);
            $table->string('from_address', 256);
            $table->string('from_name', 256);
            $table->string('to_address', 256);
            $table->string('to_name', 256);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kamenev_feedback_mail_info');
    }
}
