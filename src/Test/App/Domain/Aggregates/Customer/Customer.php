<?php
declare(strict_types=1);

namespace ddd\Test\App\Domain\Aggregates\Customer;

use ddd\Core\Aggregate;
use ddd\Test\App\Domain\ValueObjects\Name;
use ddd\Test\App\Domain\ValueObjects\PhoneNumber;
use Ramsey\Uuid\UuidInterface;

final class Customer extends Aggregate
{
    protected Name $name;
    protected PhoneNumber $phone;

    public function __construct(UuidInterface $id, Name $name, PhoneNumber $phone)
    {
        parent::__construct($id);
        $this->name = $name;
        $this->phone = $phone;
    }

    public function getPhone(): PhoneNumber
    {
        return $this->phone;
    }

    public function getName(): Name
    {
        return $this->name;
    }
}
