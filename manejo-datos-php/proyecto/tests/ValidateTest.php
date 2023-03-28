<?php

    use PHPUnit\Framework\TestCase ;
    use App\Validate;

    Class ValidateTest extends TestCase
    {
        public function test_email()
        {
            $email = Validate::email('i@rimorsoft.com');
            $this->assertTrue($email);

        }
    }