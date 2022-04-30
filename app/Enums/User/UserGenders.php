<?php

namespace App\Enums\User;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class UserGenders extends Enum
{
    const MALE = 'Mal';
    const Female = 'Fem';
}
