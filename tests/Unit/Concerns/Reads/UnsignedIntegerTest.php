<?php

declare(strict_types=1);

namespace Tests\Unit\Concerns\Reads;

use PHPUnit\Framework\TestCase;
use PreemStudio\ByteBuffer\ByteBuffer;

final class UnsignedIntegerTest extends TestCase
{
    /** @test */
    public function it_should_read_uint8()
    {
        $buffer = ByteBuffer::new(1);
        $buffer->writeUInt8(8);
        $buffer->position(0);

        $this->assertSame(8, $buffer->readUInt8());
    }

    /** @test */
    public function it_should_read_uint16()
    {
        $buffer = ByteBuffer::new(1);
        $buffer->writeUInt16(16);
        $buffer->position(0);

        $this->assertSame(16, $buffer->readUInt16());
    }

    /** @test */
    public function it_should_read_uint32()
    {
        $buffer = ByteBuffer::new(1);
        $buffer->writeUInt32(32);
        $buffer->position(0);

        $this->assertSame(32, $buffer->readUInt32());
    }

    /** @test */
    public function it_should_read_uint64()
    {
        $buffer = ByteBuffer::new(1);
        $buffer->writeUInt64(64);
        $buffer->position(0);

        $this->assertSame(64, $buffer->readUInt64());
    }

    /** @test */
    public function it_should_read_ubyte()
    {
        $buffer = ByteBuffer::new(1);
        $buffer->writeUByte(8);
        $buffer->position(0);

        $this->assertSame(8, $buffer->readUByte());
    }

    /** @test */
    public function it_should_read_ushort()
    {
        $buffer = ByteBuffer::new(1);
        $buffer->writeUShort(15);
        $buffer->position(0);

        $this->assertSame(15, $buffer->readUShort());
    }

    /** @test */
    public function it_should_read_uint()
    {
        $buffer = ByteBuffer::new(1);
        $buffer->writeUInt(32);
        $buffer->position(0);

        $this->assertSame(32, $buffer->readUInt());
    }

    /** @test */
    public function it_should_read_ulong()
    {
        $buffer = ByteBuffer::new(1);
        $buffer->writeULong(64);
        $buffer->position(0);

        $this->assertSame(64, $buffer->readULong());
    }
}
