<?php


namespace App\Ship\Parents;

use App\Ship\Interfaces\ApiControllerInterface;
use App\Ship\Interfaces\EntityInterface;
use App\Ship\Interfaces\ParentInterface;
use App\Ship\Traits\CallableTrait;
use App\Ship\Traits\HttpResponses;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Collection as SupportCollection;
use ReflectionClass;
use ReflectionException;
use Spatie\Fractal\Facades\Fractal;

class ApiController implements ApiControllerInterface, ParentInterface
{
    use CallableTrait;
    use HttpResponses;
}
