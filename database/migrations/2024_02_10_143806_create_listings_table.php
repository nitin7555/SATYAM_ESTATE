<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('listings', function (Blueprint $table) {
            $table->id("listing_id");
            $table->string('title')->required();
            $table->text('aboutproject')->nullable();
            $table->text('aboutbuilder')->nullable();
            $table->text('projectFeatures')->nullable();
            $table->text('sitePlan')->nullable();
            $table->text('locationPlan')->nullable();
            $table->text('floorPlan')->nullable();
            $table->string('image')->nullable();
            $table->string('price')->required();
            $table->string('property_type')->required();
            $table->string('city')->required();
            $table->string('locality')->required();
            $table->foreignId('user_id')->constrained('users', 'id');
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
        Schema::dropIfExists('listings');
    }
};
