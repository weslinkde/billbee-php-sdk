<?php
/**
 * This file is part of the Billbee API package.
 *
 * Copyright 2017 - 2018 by Billbee GmbH
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 *
 * Created by Julian Finkler <julian@mintware.de>
 */

namespace BillbeeDe\BillbeeAPI\Response;

use MintWare\JOM\JsonField;

class GetEventsResponse extends BaseResponse
{
    /**
     * @var \BillbeeDe\BillbeeAPI\Model\Event[]
     * @JsonField(name="Data", type="\BillbeeDe\BillbeeAPI\Model\Event[]")
     */
    public $data = [];
}
