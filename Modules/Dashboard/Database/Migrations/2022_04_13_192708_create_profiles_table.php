<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_open_relation'); // yeni ilişkiye açık mı
            $table->enum('relation_status',['married','widow','newly divorced'])->nullable(); // ilişki durumu
            $table->text('about');
            $table->string('philosophy')->nullable();//hayat felsefesi
            $table->string('feith'); //inanç
            $table->string('cover_photo')->nullable();
            $table->foreignId('current_country')->nullable()->constrained('countries');
            //@todo nullondelete nedir ? araştır
            //@todo buraya telefondan gelen son konum datasıda kaydedilecek

            $table->foreignId('current_province')->nullable()->constrained('cities');
            $table->foreignId('job')->nullable()->constrained('lookups');  // sektör ya da işten birisini seçebilir ama illaki birisini seçmeli
            $table->foreignId('job_sector')->nullable()->constrained('lookups');
            /**
             * En sevdiği film  -> lookup
            En sevdiği aktör -> lookup
            En sevdiği yemek -> lookup
            En sevdiği Mekan konumu  -> lookup
            En sevdiği kitap -> lookup
            En sevdiği şarkıcı -> lookup
            En sevdiği şarkı -> lookup
             * @todo Bunlarda ekleneecek ama biraz daha düşünmek istiyorum
             */
            $table->timestamps();

            $table->foreignId('member_id')
                ->constrained()
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
        Schema::dropIfExists('profiles');
    }
};
