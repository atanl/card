<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->unique();
            $table->string('name')->comment='公司全称';
            $table->string('short_name')->comment='公司简称';
            $table->string('mobile_no')->comment='公司固定电话，员工如果设置固定电话则默认使用这个字段的值';
            $table->string('tel_no')->comment='公司默认的移动电话号码，员工如果设置移动电话则默认使用这个字段的值';
            $table->string('address')->comment='公司地址，员工如果独立设置地址则默认使用这个字段的值';
            $table->longText('intro')->nullable()->comment='公司简介';
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('companies');
    }
}
