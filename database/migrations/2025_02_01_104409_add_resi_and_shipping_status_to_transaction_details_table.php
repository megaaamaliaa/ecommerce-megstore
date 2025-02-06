<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('transaction_details', function (Blueprint $table) {
            //
            $table->string('resi');
            $table->string('shipping_status'); // PENDING/SHIPPING/SUCCESS
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaction_details', function (Blueprint $table) {
            //
            $table->dropColumn('resi');
            $table->dropColumn('shipping_status');
        });
    }
};
