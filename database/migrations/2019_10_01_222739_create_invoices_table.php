<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{

    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->integer('customer_id')->nullable();
//            $table->string('invoice_date');
            $table->integer('invoice_number');
            $table->string('invoice_number_formal')->nullable();
            $table->string('invoice_number_informal')->nullable();
            $table->integer('item_id')->nullable();
            $table->double('capital')->nullable();
            $table->double('sale_price')->nullable();
            $table->double('discount')->default(0);
            $table->double('sale_price_with_dis')->nullable();
            $table->double('profit');
            $table->double('paid')->default(0);
            $table->double('rest');
            $table->text('description');
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
