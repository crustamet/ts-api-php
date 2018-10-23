<?php

namespace TRTLServices;

use TRTLServices\Http\Response;
use TRTLServices\Http\Client;

class TRTLServices extends Client
{

    public function createAddress():Response
    {
        $params = [];

        return $this->_post('address', $params);
    }

    public function deleteAddress(string $address):Response
    {
        return $this->_delete('address/' . $address);
    }

    public function viewAddress(string $address):Response
    {
        return $this->_get('address/view/' . $address);
    }

    public function viewAddresses():Response
    {
        return $this->_get('address/view/all');
    }

    public function scanAddress(string $address, int $blockIndex):Response
    {
        return $this->_get('address/scan/' . $address  . '/' .  $blockIndex);
    }

    public function getFee(float $amount):Response
    {
        return $this->_get('transfer/fee/' . $amount);
    }

    public function createTransfer(
        string $to,
        string $from,
        float $amount,
        float $fee,
        string $paymentId = null,
        string $extra = null
    ):Response {
        $params = [
            'to'        => $to,
            'from'      => $from,
            'amount'    => $amount,
            'fee'       => $fee,
        ];

        if (!is_null($extra)) $params['extra'] = $extra;
        if (!is_null($paymentId)) $params['paymentId'] = $paymentId;

        return $this->_post('transfer', $params);
    }

    public function viewTransfer(string $transactionHash):Response {
        return $this->_get('transfer/view/' . $transactionHash);
    }

    public function getStatus():Response
    {
        return $this->_get('status');
    }
}