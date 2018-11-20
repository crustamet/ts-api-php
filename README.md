# TRTL Service PHP API Interface

This wrapper allows you to easily interact with the [TRTL Services](https://trtl.services) 0.9.0 API to quickly develop applications that interact with the [TurtleCoin](https://turtlecoin.lol) Network.


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
use TRTLservices\TRTLServices;

$config = [
    'token' => 'eyJhbGciOiJIUzUxMiIsInR5cCI6IkpXVCJ9.eyJuYW1lIjoidGVzdCIsImFwcElkIjo0LCJ1c2VySWQiOjYsInBlcm1pc3Npb25zIjpbImFkZHJlc3M6bmV3Il0sImlhdCI6MTUzNjU4NTM2NywiZXhwIjoxNTM5MTc3MzY3LCJhdWQiOiJ0dXJ0bGV3YWxsZXQuaW8iLCJpc3MiOiJUUlRMIFNlcnZpY2VzIiwianRpIjoiMzMifQ.AEHXmvTo8RfNuZ15Y3IGPRhZPaJxFSmOZvVv2YGN9L4We7bXslIPxhMv_n_5cNW8sIgE2Fr-46OTb5H5AFgpjA',
    'timeout' => 2000
];

$TS = new TRTLServices($config);

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

API documentation is available at https://trtl.services/docs


## Methods

### createAddress()
Create a new TRTL addresses

```php
$TS->createAddress()
```


### getAddress(address)
Get address details by address
```php
$TS->getAddress("TRTLuxH78akDMCsXycnU5HjJE6zPCgM4KRNNQSboqh1yiTnvxuhNVUL9tK92j9kurSKdXVHFmjSRkaNBxM6Nb3G8eQGL7aj113A")
```


### deleteAddress(address)
Delete a selected TRTL addresses

```php
$TS->deleteAdddress("TRTLuxH78akDMCsXycnU5HjJE6zPCgM4KRNNQSboqh1yiTnvxuhNVUL9tK92j9kurSKdXVHFmjSRkaNBxM6Nb3G8eQGL7aj113A")
```


### getAddresses()
View all addresses belonging to the specified token.

```php
$TS->getAddresses()
```


### scanAddress(address, blockIndex)
Scan an address for transactions between a 100 block range starting from the specified blockIndex.

```php
$TS->scanAddress("TRTLuxH78akDMCsXycnU5HjJE6zPCgM4KRNNQSboqh1yiTnvxuhNVUL9tK92j9kurSKdXVHFmjSRkaNBxM6Nb3G8eQGL7aj113A", 899093)
```


### getAddressKeys(address)
Get the public and secret spend key of an address.

```php
$TS->getAddressKeys("TRTLuxH78akDMCsXycnU5HjJE6zPCgM4KRNNQSboqh1yiTnvxuhNVUL9tK92j9kurSKdXVHFmjSRkaNBxM6Nb3G8eQGL7aj113A")
```


### integrateAddress(address, paymentId)
Create an integrated address with an address and payment ID.

```php
$TS->integrateAddress("TRTLuxH78akDMCsXycnU5HjJE6zPCgM4KRNNQSboqh1yiTnvxuhNVUL9tK92j9kurSKdXVHFmjSRkaNBxM6Nb3G8eQGL7aj113A", "7d89a2d16365a1198c46db5bbe1af03d2b503a06404f39496d1d94a0a46f8804")
```


### getIntegratedAddresses(address)
Create an integrated address with an address and payment ID.

```php
$TS->getIntegratedAddresses("TRTLuxH78akDMCsXycnU5HjJE6zPCgM4KRNNQSboqh1yiTnvxuhNVUL9tK92j9kurSKdXVHFmjSRkaNBxM6Nb3G8eQGL7aj113A")
```


### getFee(amount)
Calculate the TRTL Services fee for an amount specified in TRTL with two decimal points.

```php
$TS->getFee(1092.19)
```


### createTransfer(sender, receiver, amount, fee, paymentId, extra)
Send a TRTL transaction with an address with the amount specified two decimal points.

```php
$TS->createTransfer(
  "TRTLuxH78akDMCsXycnU5HjJE6zPCgM4KRNNQSboqh1yiTnvxuhNVUL9tK92j9kurSKdXVHFmjSRkaNBxM6Nb3G8eQGL7aj113A",
  "TRTLuzAzNs1E1RBFhteX56A5353vyHuSJ5AYYQfoN97PNbcMDvwQo4pUWHs7SYpuD9ThvA7AD3r742kwTmWh5o9WFaB9JXH8evP",
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
$TS->getTransfer("EohMUzR1DELyeQM9RVVwpmn5Y1DP0lh1b1ZpLQrfXQsgtvGHnDdJSG31nX2yESYZ")
```


### getWallet()
Get wallet container info and health check.

```php
$TS->getWallet()
```


### getStatus()
Get the current status of the TRTL Services infrastructure.

```php
$TS->getStatus()
```