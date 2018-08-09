<?php


use Illuminate\Database\Schema\Blueprint;
use Sanmark\IlluminatedPhinx\Migration\Migration;

class CreateFacebookAccountsTable extends Migration
{
    public function up()
    {
        $this -> schema -> create('facebook_accounts', function (Blueprint $t) {
            $t -> increments('id');
            $t
                -> integer('user_id')
                -> unsigned()
            ;
            $t -> text('key');
            $t -> timestamps();

            $t
                -> foreign('user_id')
                -> references('id')
                -> on('users')
                -> onDelete('cascade')
                -> onUpdate('cascade')
            ;
        });
    }

    public function down()
    {
        $this -> schema -> dropIfExists('facebook_accounts');
    }
}
