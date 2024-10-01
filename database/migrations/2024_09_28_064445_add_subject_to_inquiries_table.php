<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveSubjectFromInquiriesTable extends Migration
{
    public function up()
    {
        Schema::table('inquiries', function (Blueprint $table) {
            $table->dropColumn('subject');
        });
    }

    public function down()
    {
        Schema::table('inquiries', function (Blueprint $table) {
            $table->string('subject')->nullable(); // もしくは、適切な型を設定
        });
    }
}
