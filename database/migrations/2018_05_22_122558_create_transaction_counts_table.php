<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionCountsTable extends Migration
{
    public function up()
    {
        Schema::create('transaction_counts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account_uuid');
            $table->integer('count')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaction_counts');
    }
}
