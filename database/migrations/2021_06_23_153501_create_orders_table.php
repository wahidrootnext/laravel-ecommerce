<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->enum('status', ['Pending', 'Awaiting Payment', 'Awaiting Fulfillment', 'Awaiting Shipment', 'Awaiting Pickup', 'Partially Shipped', 'Completed', 'Shipped', 'Cancelled', 'Declined', 'Refunded', 'Disputed', 'Manual Verification Required', 'Partially Refunded']);
            $table->decimal('grand_total', 20, 6);
            $table->integer('item_count')->nullable();
            $table->tinyInteger('is_paid')->nullable();
            $table->enum('payment_method', ['Credit/Debit Card', 'Bank Transfers', 'E-Wallet', 'Cash on Delivery', 'Mobile Banking'])->nullable();
            $table->string('shipping_full_name');
            $table->text('shipping_address');
            $table->string('shipping_city');
            $table->string('shipping_state');
            $table->string('shipping_zip_code');
            $table->string('shipping_phone');
            $table->text('notes')->nullable();
            $table->string('billing_full_name')->nullable();
            $table->text('billing_address')->nullable();
            $table->string('billing_city')->nullable();
            $table->string('billing_state')->nullable();
            $table->string('billing_zip_code')->nullable();
            $table->string('billing_phone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
