<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Contact
 *
 * @property int $id
 * @property string|null $address
 * @property mixed|null $phones
 * @property mixed|null $emails
 * @property string|null $working_hours
 * @property string|null $photo
 * @property string|null $requisite_name
 * @property string|null $requisite_address
 * @property string|null $requisite_inn
 * @property string|null $requisite_kpp
 * @property string|null $requisite_ogrn
 * @property string|null $requisite_okpo
 * @property string|null $requisite_bank
 * @property string|null $requisite_rs
 * @property string|null $requisite_ks
 * @property string|null $requisite_bik
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereEmails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact wherePhones($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereRequisiteAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereRequisiteBank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereRequisiteBik($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereRequisiteInn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereRequisiteKpp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereRequisiteKs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereRequisiteName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereRequisiteOgrn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereRequisiteOkpo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereRequisiteRs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereWorkingHours($value)
 * @mixin \Eloquent
 */
class Contact extends Model
{
    use HasFactory;
}
