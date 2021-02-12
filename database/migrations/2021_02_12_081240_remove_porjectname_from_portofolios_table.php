<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemovePorjectnameFromPortofoliosTable extends Migration
{
        public function up()
        {
            Schema::table('portofolios', function($table) {
                $table->dropColumn(['porjectname']);
            });
        }

        public function down()
        {
            Schema::table('articles', function($table) {
                $table->string('porjectname');
            });
        }
}
