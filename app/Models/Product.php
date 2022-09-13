<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    protected $table = 'products';

    use HasFactory;


    public function getDiscountPercentage()
    {
        $discount_percentage = null;

        if($this->sku == 000003) {
            $discount_percentage = '15%';
        }

        if($this->category == 'insurance') {
            $discount_percentage = '30%';
        }

        return $discount_percentage;

    }

    public function getFinalPrice() {

        $final_price = $this->price;

        if($this->sku == 000003) {
            $final_price = $this->price - ($this->price * 15 / 100);
        }

        if($this->category == 'insurance') {
            $final_price = $this->price - ($this->price * 30 / 100);
        }

        return $final_price;

    }

    public function jsonSerialize(): array
    {

        return [
            'sku' => $this->sku,
            'name' => $this->name,
            'category' => $this->category,
            'price' => [
                'original' => $this->price,
                'final' => $this->getFinalPrice(),
                'discount_percentage' => $this->getDiscountPercentage(),
                'currency' => 'EUR',
            ]
        ];
    }
}
