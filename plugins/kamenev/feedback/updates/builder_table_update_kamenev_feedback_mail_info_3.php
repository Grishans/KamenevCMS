<?php namespace Kamenev\Feedback\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKamenevFeedbackMailInfo3 extends Migration
{
    public function up()
    {
        Schema::table('kamenev_feedback_mail_info', function($table)
        {
            $table->dropColumn('from_address');
        });
    }
    
    public function down()
    {
        Schema::table('kamenev_feedback_mail_info', function($table)
        {
            $table->string('from_address', 256);
        });
    }
}
