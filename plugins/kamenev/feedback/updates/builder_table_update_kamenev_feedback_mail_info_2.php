<?php namespace Kamenev\Feedback\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKamenevFeedbackMailInfo2 extends Migration
{
    public function up()
    {
        Schema::table('kamenev_feedback_mail_info', function($table)
        {
            $table->string('subject', 200);
        });
    }
    
    public function down()
    {
        Schema::table('kamenev_feedback_mail_info', function($table)
        {
            $table->dropColumn('subject');
        });
    }
}
