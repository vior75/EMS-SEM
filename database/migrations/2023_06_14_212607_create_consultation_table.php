<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('consultation', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Added user_id without 'after'
            $table->string('tujuan_aduan');
            $table->text('keterangan_aduan');
            $table->date('tarikh_konsultasi');
            $table->string('paid_pilihan');
            $table->string('kounselor_pilihan');
            $table->timestamps();

            // Add the foreign key constraint for user_id
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultation');
    }
};
