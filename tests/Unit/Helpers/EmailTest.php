<?php

namespace Tests\Unit\Helpers;

use PHPUnit\Framework\TestCase;
use App\Helpers\Email;

class EmailTest extends TestCase
{
    public function testEmail(): void
    {
        // $email = 'i@admin.com';
        // $result = (bool) filter_var($email, FILTER_VALIDATE_EMAIL);

        $result = Email::validate('i@admin.com');
        $this->assertTrue($result);

        $result = Email::validate('i@@admin.com');
        $this->assertFalse($result);
    }
}
