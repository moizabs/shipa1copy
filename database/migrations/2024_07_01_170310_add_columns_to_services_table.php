<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->string('heading_three')->nullable()->after('category_id');
            $table->text('desc_three')->nullable()->after('heading_three');
            $table->string('heading_four')->nullable()->after('desc_three');
            $table->text('desc_four')->nullable()->after('heading_four');
            $table->string('heading_five')->nullable()->after('desc_four');
            $table->string('heading_six')->nullable()->after('heading_five');
            $table->text('desc_six')->nullable()->after('heading_six');
            $table->string('heading_seven')->nullable()->after('desc_six');
            $table->text('desc_seven')->nullable()->after('heading_seven');
            $table->string('heading_eight')->nullable()->after('desc_seven');
            $table->text('desc_eight')->nullable()->after('heading_eight');
            $table->string('faq_image')->nullable()->after('desc_eight');
            $table->string('faq_q1')->nullable()->after('faq_image');
            $table->text('ans_faq1')->nullable()->after('faq_q1');
            $table->string('faq_q2')->nullable()->after('ans_faq1');
            $table->text('ans_faq2')->nullable()->after('faq_q2');
            $table->string('faq_q3')->nullable()->after('ans_faq2');
            $table->text('ans_faq3')->nullable()->after('faq_q3');
            $table->string('layout_type')->default('old')->after('ans_faq3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn([
                'heading_three',
                'desc_three',
                'heading_four',
                'desc_four',
                'heading_five',
                'heading_six',
                'desc_six',
                'heading_seven',
                'desc_seven',
                'heading_eight',
                'desc_eight',
                'faq_image',
                'faq_q1',
                'ans_faq1',
                'faq_q2',
                'ans_faq2',
                'faq_q3',
                'ans_faq3',
                'layout_type'
            ]);
        });
    }
}
