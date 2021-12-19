<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldToTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transactions', function (Blueprint $table) {

            $table->bigInteger('users_id');

            $table->text('address')->nullable();

            $table->float('total_price')->default(0);
            $table->float('shipping_price')->default(0);

            $table->string('status')->default('PENDING');
            $table->string('payment')->default('MANUAL');

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transactions', function (Blueprint $table) {
            
            $table->dropColumn('users_id');
            $table->dropColumn('address');
            $table->dropColumn('total_price');
            $table->dropColumn('shipping_price');
            $table->dropColumn('status');
            $table->dropColumn('payment');
        });
    }
}
