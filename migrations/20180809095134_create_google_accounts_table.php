<?php


use Illuminate\Database\Schema\Blueprint;
use Sanmark\IlluminatedPhinx\Migration\Migration;

class CreateGoogleAccountsTable extends Migration
{
    public function up()
    {
        $this -> schema -> create('google_accounts', function (Blueprint $t) {
            $t -> increments('id');
            $t
                -> integer('user_id')
                -> unsigned();
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
        $this -> schema -> dropIfExists('google_accounts');
    }
}
