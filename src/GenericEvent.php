<?php
/**
 * This file is part of the prooph/event-store-http-api.
 * (c) 2016-2016 prooph software GmbH <contact@prooph.de>
 * (c) 2016-2016 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Prooph\EventStore\Http\Api;

use Prooph\Common\Messaging\DomainMessage;
use Prooph\Common\Messaging\Message;
use Prooph\Common\Messaging\PayloadTrait;

final class GenericEvent extends DomainMessage
{
    use PayloadTrait;

    public function version(): int
    {
        return $this->metadata()['_version'];
    }

    public function messageType(): string
    {
        return Message::TYPE_EVENT;
    }
}
