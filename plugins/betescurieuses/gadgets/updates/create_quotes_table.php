<?php namespace BetesCurieuses\Gadgets\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateQuotesTable extends Migration
{

    public function up()
    {
        Schema::create('betescurieuses_gadgets5_quotes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->text('author');
            $table->dateTime('published_at');
            $table->boolean('published');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('betescurieuses_gadgets_quotes');
    }

}
