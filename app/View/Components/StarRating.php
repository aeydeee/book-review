<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StarRating extends Component
{
    public function __construct(
        public readonly ?float $rating
    )
    {

    }

    public function render(): View
    {
        return view('components.star-rating');
    }
}
