# BLOC Service PHP API Interface

This wrapper allows you to easily interact with the [BLOC Gateway](https://bloc-gateway.com) 0.9.0 API to quickly develop applications that interact with the [BLOC.MONEY](https://bloc.money) Network.


# Table of Contents

1. [Installation](#installation)
2. [Intialization](#intialization)
3. [Documentation](#documentation)
  1. [Methods](#methods)


# Installation

```bash
composer require trtlservices/ts-api-php
```


# Intialization

```php
use BLOCGateway\BLOCGateway;

$config = [
    'token' => 'eyJhbGciOiJIUzUxMiIsInR5cCI6IkpXVCJ9.eyJuYW1lIjoidGVzdCIsImFwcElkIjo0LCJ1c2VySWQiOjYsInBlcm1pc3Npb25zIjpbImFkZHJlc3M6bmV3Il0sImlhdCI6MTUzNjU4NTM2NywiZXhwIjoxNTM5MTc3MzY3LCJhdWQiOiJ0dXJ0bGV3YWxsZXQuaW8iLCJpc3MiOiJUUlRMIFNlcnZpY2VzIiwianRpIjoiMzMifQ.AEHXmvTo8RfNuZ15Y3IGPRhZPaJxFSmOZvVv2YGN9L4We7bXslIPxhMv_n_5cNW8sIgE2Fr-46OTb5H5AFgpjA',
    'timeout' => 2000
];

$BLOCGATEWAY = new BLOCGateway($config);

```

## Reponse Formattng

```php

// The result field from the RPC response
$response->result();

// RPC response as JSON string
$response->toJson();

// RPC response as an array
$response->toArray();
``` 


# Documentation

API documentation is available at https://bloc-developer.com/api_bloc-gateway


## Methods

### createAddress()
Create a new BLOC addresses

```php
$BLOCGATEWAY->createAddress()
```


### getAddress(address)
Get address details by address
```php
$BLOCGATEWAY->getAddress("aBLocuxH78akDMCsXycnU5HjJE6zPCgM4KRNNQSboqh1yiTnvxuhNVUL9tK92j9kurSKdXVHFmjSRkaNBxM6Nb3G8eQGL7aj113A")
```


### deleteAddress(address)
Delete a selected BLOC addresses

```php
$BLOCGATEWAY->deleteAdddress("aBLocuxH78akDMCsXycnU5HjJE6zPCgM4KRNNQSboqh1yiTnvxuhNVUL9tK92j9kurSKdXVHFmjSRkaNBxM6Nb3G8eQGL7aj113A")
```


### getAddresses()
View all addresses.

```php
$BLOCGATEWAY->getAddresses()
```


### scanAddress(address, blockIndex)
Scan an address for transactions between a 100 block range starting from the specified blockIndex.

```php
$BLOCGATEWAY->scanAddress("aBLocuxH78akDMCsXycnU5HjJE6zPCgM4KRNNQSboqh1yiTnvxuhNVUL9tK92j9kurSKdXVHFmjSRkaNBxM6Nb3G8eQGL7aj113A", 899093)
```


### getAddressKeys(address)
Get the public and secret spend key of an address.

```php
$BLOCGATEWAY->getAddressKeys("aBLocuxH78akDMCsXycnU5HjJE6zPCgM4KRNNQSboqh1yiTnvxuhNVUL9tK92j9kurSKdXVHFmjSRkaNBxM6Nb3G8eQGL7aj113A")
```


### integrateAddress(address, paymentId)
Create an integrated address with an address and payment ID.

```php
$BLOCGATEWAY->integrateAddress("aBLocuxH78akDMCsXycnU5HjJE6zPCgM4KRNNQSboqh1yiTnvxuhNVUL9tK92j9kurSKdXVHFmjSRkaNBxM6Nb3G8eQGL7aj113A", "7d89a2d16365a1198c46db5bbe1af03d2b503a06404f39496d1d94a0a46f8804")
```


### getIntegratedAddresses(address)
Get all integrated addresses by address.

```php
$BLOCGATEWAY->getIntegratedAddresses("aBLocuxH78akDMCsXycnU5HjJE6zPCgM4KRNNQSboqh1yiTnvxuhNVUL9tK92j9kurSKdXVHFmjSRkaNBxM6Nb3G8eQGL7aj113A")
```


### getFee(amount)
Calculate the BLOC Services fee for an amount specified in BLOC with two decimal points.

```php
$BLOCGATEWAY->getFee(1092.19)
```


### createTransfer(sender, receiver, amount, fee, paymentId, extra)
Send a BLOC transaction with an address with the amount specified two decimal points.

```php
$BLOCGATEWAY->createTransfer(
  "aBLocuxH78akDMCsXycnU5HjJE6zPCgM4KRNNQSboqh1yiTnvxuhNVUL9tK92j9kurSKdXVHFmjSRkaNBxM6Nb3G8eQGL7aj113A",
  "aBLocGzAzNs1E1RBFhteX56A5353vyHuSJ5AYYQfoN97PNbcMDvwQo4pUWHs7SYpuD9ThvA7AD3r742kwTmWh5o9WFaB9JXH8evP",
  1000.01,
  1.2,
  "7d89a2d16365a1198c46db5bbe1af03d2b503a06404f39496d1d94a0a46f8804",
  "3938f915a11582f62d93f82f710df9203a029f929fd2f915f2701d947f920f99"
)
```
#### You can leave the last two fields (paymentId and extra) blank.


### getTransfer(address)
Get a transaction details specified by transaction hash.

```php
$BLOCGATEWAY->getTransfer("EohMUzR1DELyeQM9RVVwpmn5Y1DP0lh1b1ZpLQrfXQsgtvGHnDdJSG31nX2yESYZ")
```


### getWallet()
Get wallet container info and health check.

```php
$BLOCGATEWAY->getWallet()
```


### getStatus()
Get the current status of the BLOC Services infrastructure.

```php
$BLOCGATEWAY->getStatus()
```

# License

```
Copyright (C) 2018 Rashed Mohammed, The TurtleCoin Developers

Please see the included LICENSE file for more information.
```
