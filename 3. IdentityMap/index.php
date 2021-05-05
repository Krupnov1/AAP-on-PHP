<?php

namespace IdentityMap;

use IdentityMap\Entity\Product;
use IdentityMap\Entity\User;
use IdentityMap\EntityManager\ProductEntityManager;
use IdentityMap\EntityManager\UserEntityManager;
use IdentityMap\IdentityMaps\IdentityMap;
use IdentityMap\Mapper\ProductMapper;
use IdentityMap\Mapper\UserMapper;
use IdentityMap\Storage\StorageProductAdapter;
use IdentityMap\Storage\StorageUserAdapter;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^IdentityMap/', '', $className);
    require_once __DIR__ . $className . '.php';
});

$productEntityManager = new ProductEntityManager(
    new IdentityMap(),
    new ProductMapper(new StorageProductAdapter())
); 

$product = $productEntityManager->findById(Product::class, 7);
echo "Под id {$product->getId()} хранится товар с наименованием {$product->getName()}";
echo "<br>";
$product2 = $productEntityManager->findById(Product::class, 7);
echo "Объект один: " . ($product === $product2 ? 'true' : 'false');
echo "<br>";


$userEntityManager = new UserEntityManager(
    new IdentityMap(),
    new UserMapper(new StorageUserAdapter())
); 

$user = $userEntityManager->findById(User::class, 4);
echo "Под id {$user->getId()} хранится пользователь с именем {$user->getName()}.\n";
echo "<br>";
$user2 = $userEntityManager->findById(User::class, 4);
echo "Объект один: " . ($user === $user2 ? 'true' : 'false') . "\n";