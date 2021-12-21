<?php

namespace Faker\Provider\en_US;

class Food extends \Faker\Provider\Food
{
    protected static $desserts = [
        'Peach Cobbler', 'Vanilla Gelato', 'Apple Pie Ice Cream Pie', 'Todd\'s Snickerdoodles', 'Classic Carrot Cake', 'Strawberry Rhubarb Cheesecake', 'Bananas Foster', 'Baked Alaska', 'Boston Cream Pie',
        'Indiana Sugar Cream Pie', 'Molasses Pie', 'Thomas Keller\'s Coconut Cake', 'Banana Pudding', 'Peanut Butter Buckeyes', 'Chocolate Pudding Pie', '',
    ];

    public function dessert()
    {
        return static::randomElement(static::$desserts);
    }
}
