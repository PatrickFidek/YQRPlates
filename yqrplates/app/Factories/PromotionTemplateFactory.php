<?php

namespace App\Factories;

use app\Models\Promotion;

abstract class PromotionTemplateFactory {
    protected $promotions;

    public function __construct($promotions)
    {
        $this->promotions = $promotions;
    }

    public function displayPromotions(){
        return "";
    }


    public function displayRestaurantPromotions() {
        return <<<HTML
              <div class="item active">
      <h4>{{ $this->promotions->promotion }}</h4>
      </div>
      HTML;
    }




}