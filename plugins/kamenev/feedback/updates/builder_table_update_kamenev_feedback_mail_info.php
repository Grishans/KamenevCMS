<?php namespace Kamenev\Feedback\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKamenevFeedbackMailInfo extends Migration
{
    public function up()
    {
        Schema::table('kamenev_feedback_mail_info', function($table)
        {
            $table->dropColumn('port');
            $table->dropColumn('encryption');
            $table->dropColumn('email');
            $table->dropColumn('password');
            $table->dropColumn('driver');
            $table->dropColumn('host');
        });
    }
    
    public function down()
    {
        Schema::table('kamenev_feedback_mail_info', function($table)
        {
            $table->smallInteger('port');
            $table->string('encryption', 3);
            $table->string('email', 256);
            $table->string('password', 256);
            $table->string('driver', 10);
            $table->string('host', 100);
        });
    }
}
