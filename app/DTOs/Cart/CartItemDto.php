<?php

namespace App\DTOs\Cart;

class CartItemDto
{
    private int $productId;
    private string $productName;
    private float $productPrice;
    private int $productQuantity;
    private ?string $productImage;

    /**
     * @return int
     */
    public function getProductId(): int
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     */
    public function setProductId(int $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * @return string
     */
    public function getProductName(): string
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     */
    public function setProductName(string $productName): void
    {
        $this->productName = $productName;
    }

    /**
     * @return int
     */
    public function getProductPrice(): int
    {
        return $this->productPrice;
    }

    /**
     * @param int $productPrice
     */
    public function setProductPrice(int $productPrice): void
    {
        $this->productPrice = $productPrice;
    }

    /**
     * @return string|null
     */
    public function setProductImage(?string $imagePath)
    {
        return $this->productImage=$imagePath;
    }

    /**
     * @return int
     */
    public function getProductQuantity(): int
    {
        return $this->productQuantity;
    }

    /**
     * @param int $productQuantity
     */
    public function setProductQuantity(int $productQuantity): void
    {
        $this->productQuantity = $productQuantity;
    }


    public function incrementTotalQuantity(): void
    {
        $this->productQuantity += 1;
    }

    public function incrementTotalSum(float $price): void
    {
        $this->totalSum += $price;
    }
}
