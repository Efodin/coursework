<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    public function up() {
        Schema::create('baskets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('baskets');
    }

    public function products() {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }
}
