<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuideReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('guide-reviews', function (Blueprint $table) {
            $table->text('Review');
            $table->timestamps();
            $table->foreignId('user_id')
                ->constrained("users")
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('guide_id')
                ->constrained("users")
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
