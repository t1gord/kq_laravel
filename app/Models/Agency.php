<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Agency
 *
 * @property int $id
 * @property string $city
 * @property string $name
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $latitude
 * @property string|null $longitude
 * @property string $active
 * @method static \Illuminate\Database\Eloquent\Builder|Agency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Agency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Agency query()
 * @method static \Illuminate\Database\Eloquent\Builder|Agency whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agency whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agency whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agency whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agency whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agency whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agency wherePhone($value)
 * @mixin \Eloquent
 */
class Agency extends Model
{
    use HasFactory;
}
