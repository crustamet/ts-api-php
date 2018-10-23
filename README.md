# TRTL Service PHP API Interface

This wrapper allows you to easily interact with the [TRTL Services](https://trtl.services) API to quickly develop applications that interact with the [TurtleCoin](https://turtlecoin.lol) Network.


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

API documentation is available at https://trtl.services/documentation


## Methods

### createAddress()
Create a new TRTL addresses

```php
$TS->createAddress()
```


### deleteAddress(address)
Delete a selected TRTL addresses

```php
$TS->deleteAdddress("TRTLuxH78akDMCsXycnU5HjJE6zPCgM4KRNNQSboqh1yiTnvxuhNVUL9tK92j9kurSKdXVHFmjSRkaNBxM6Nb3G8eQGL7aj113A")
```


### ViewAddress()
Get address details by address
```php
$TS->viewAddress("TRTLuxH78akDMCsXycnU5HjJE6zPCgM4KRNNQSboqh1yiTnvxuhNVUL9tK92j9kurSKdXVHFmjSRkaNBxM6Nb3G8eQGL7aj113A")
```


### viewAddresses()
View all addresses belonging to the specified token.

```php
$TS->viewAddresses()
```


### scanAddress()
Scan for transactions in the next 100 blocks specified by blockIndex and address.

```php
$TS->scanAddress("TRTLuxH78akDMCsXycnU5HjJE6zPCgM4KRNNQSboqh1yiTnvxuhNVUL9tK92j9kurSKdXVHFmjSRkaNBxM6Nb3G8eQGL7aj113A", 899093)
```


### getFee()
Calculate the TRTL Services fee for a specified TRTL amount.

```php
$TS->getFee(1092.19)
```


### createTransfer()
Send a TRTL transaction with a specified account.

```php
$TS->createTransfer("TRTLuxH78akDMCsXycnU5HjJE6zPCgM4KRNNQSboqh1yiTnvxuhNVUL9tK92j9kurSKdXVHFmjSRkaNBxM6Nb3G8eQGL7aj113A", "TRTLuzAzNs1E1RBFhteX56A5353vyHuSJ5AYYQfoN97PNbcMDvwQo4pUWHs7SYpuD9ThvA7AD3r742kwTmWh5o9WFaB9JXH8evP", 1000, 1)
```

### viewTransfer()
Lists transaction details with specified hash.

```php
$TS->viewTransfer("EohMUzR1DELyeQM9RVVwpmn5Y1DP0lh1b1ZpLQrfXQsgtvGHnDdJSG31nX2yESYZ")
```


### getStatus()
Get the current status of the TRTL Services infrastructure.

```php
$TS->getStatus()
```


# License

```
Copyright (C) 2018 Fexra, The TurtleCoin Developers

Please see the included LICENSE file for more information.
```
