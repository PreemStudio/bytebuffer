<?php

declare(strict_types=1);

namespace Tests\Unit\Concerns\Reads;

use PHPUnit\Framework\TestCase;
use PreemStudio\ByteBuffer\ByteBuffer;

final class InitialisableTest extends TestCase
{
    private $expected = '48656c6c6f20576f726c6420f09f9884';

    /** @test */
    public function it_should_initialise_from_binary()
    {
        $buffer = ByteBuffer::fromBinary('Hello World 😄');

        $this->assertSame($this->expected, $buffer->toHex());
    }

    /** @test */
    public function it_should_initialise_from_hex()
    {
        $buffer = ByteBuffer::fromHex('48656c6c6f20576f726c6420f09f9884');

        $this->assertSame($this->expected, $buffer->toHex());
    }

    /** @test */
    public function it_should_fail_to_initialise_from_hex()
    {
        $this->expectException(\InvalidArgumentException::class);

        ByteBuffer::fromHex('😄');
    }

    /** @test */
    public function it_should_initialise_from_utf8()
    {
        $buffer = ByteBuffer::fromUTF8('Hello World 😄');

        $this->assertSame($this->expected, $buffer->toHex());
    }

    /** @test */
    public function it_should_initialise_from_base64()
    {
        $buffer = ByteBuffer::fromBase64(base64_encode('Hello World 😄'));

        $this->assertSame($this->expected, $buffer->toHex());
    }

    /** @test */
    public function it_should_initialise_from_array()
    {
        $buffer = ByteBuffer::fromArray(str_split('Hello World 😄'));

        $this->assertSame($this->expected, $buffer->toHex());
    }

    /** @test */
    public function it_should_initialise_from_string_as_binary()
    {
        $buffer = ByteBuffer::fromString('Hello World 😄', 'binary');

        $this->assertSame($this->expected, $buffer->toHex());
    }

    /** @test */
    public function it_should_initialise_from_string_as_hex()
    {
        $buffer = ByteBuffer::fromString('48656c6c6f20576f726c6420f09f9884', 'hex');

        $this->assertSame($this->expected, $buffer->toHex());
    }

    /** @test */
    public function it_should_initialise_from_string_as_utf8()
    {
        $buffer = ByteBuffer::fromString('Hello World 😄', 'utf8');

        $this->assertSame($this->expected, $buffer->toHex());
    }

    /** @test */
    public function it_should_initialise_from_string_as_base64()
    {
        $buffer = ByteBuffer::fromString(base64_encode('Hello World 😄'), 'base64');

        $this->assertSame($this->expected, $buffer->toHex());
    }

    /** @test */
    public function it_should_throw_for_invalid_type()
    {
        $this->expectException(\InvalidArgumentException::class);

        ByteBuffer::fromString('Hello World 😄', '_INVALID_');
    }
}
