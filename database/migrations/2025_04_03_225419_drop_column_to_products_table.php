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
        if(Schema::hasTable('products')){
            if(Schema::hasColumn('products','price')){
                 Schema::table('products', function (Blueprint $table) {
                 $table->dropColumn(['price']);
             });
            }
        }
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if(Schema::hasTable('products') && !Schema::hasColumn('products','price')){ 
            if (!(Schema::hasColumns('products',['price']))){
                 Schema::table('products', function (Blueprint $table) {
                    $table->float('price')->after('description');
                
                }); 
            }
        }
       
    }

};
