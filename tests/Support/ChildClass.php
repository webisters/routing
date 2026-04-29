<?php declare(strict_types=1);
/*
 * This file is part of Webisters Routing Library.
 *
 * (c) Hafiz Muhammad Moaz <thewebisters@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\Routing\Support;

use Framework\Routing\Attributes\Route;

class ChildClass extends AbstractClass
{
    #[Route('GET', '/bye')]
    public function bye() : void
    {
    }
}
