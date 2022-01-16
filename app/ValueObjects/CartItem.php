<?php

namespace App\ValueObjects;
use App\Models\Product;
use PhpParser\Node\Scalar\String_;

class CartItem
{
    private int $productId;
    private string $name;
    private float $price;
    private ?string $imagePath;
    private int $quantity = 0;

    /**
     * @param Product $product
     * @param int $quantity
     *
     */
    public function __construct(Product $product, int $quantity = 1)
    {
        $this->productId = $product->id;
        $this->productName = $product->name;
        $this->productPrice = $product->price;
        $this->imagePath = $product->image_path;
        $this->quantity = $quantity;
    }


    /**
     * @return int
     */
    public function getProductId(): int
    {
        return $this->productId;
    }


    /**
     * @return string
     */
    public function getProductName(): string
    {
        return $this->productName;
    }

    /**
     * @return int
     */
    public function getProductPrice(): int
    {
        return $this->productPrice;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function addQuantity($product):CartItem {
        return new CartItem($product, ++$this->quantity);
    }

    public function getSum(): float
    {
        return $this->productPrice * $this->quantity;
    }

    public function getImage(): String
    {
       return is_null($this->imagePath) ?  asset('storage/products/photonull.png') : asset('storage/' . $this->imagePath);
    }




}
