<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->string('registered_name')->nullable();
            $table->string('bic');
            $table->string('website');
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->boolean('presence')->default(0);
            $table->enum('type',['private','retail','commercial'])->default('private');
            $table->enum('certification',['advanced','not_certified','entry'])->default('advanced');
            $table->bigInteger('total_income')->nullable();
            $table->bigInteger('total_assets')->nullable();
            $table->enum('currency',['HKD','USD','GBP','EUR','CNY']);
            $table->integer('employee')->nullable();
            $table->string('short_description');
            $table->text('description');
            $table->string('blockquote')->nullable();
            $table->string('headquarter');
            $table->timestamp('founded')->nullable();
            $table->string('img_1');
            $table->string('img_2')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('banks');
    }
}
