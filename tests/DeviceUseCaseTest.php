<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use useCase\DeviceUseCase;
use model\Email;

final class DeviceUseCaseTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress1(): void
    {
        $this->assertEquals(
            DeviceUseCase::get(),
            'hola'
        );
    }

    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@example.com')
        );
    }
}