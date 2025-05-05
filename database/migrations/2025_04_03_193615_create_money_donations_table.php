<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('money_donations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('giver_id');
            $table->foreign('giver_id')->references('id')->on('givers')->onDelete('cascade');
            $table->decimal('amount', 10, 2)->nullable();
            $table->date('creation_date')->default(DB::raw('CURRENT_DATE'));;
            $table->time('creation_time')->default(DB::raw('CURRENT_TIME'));;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('money_donations');
    }
};
