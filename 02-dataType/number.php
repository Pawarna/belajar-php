<?php

// int
echo "Desimal :";
var_dump(1234);

echo "Octal : ";
var_dump(0123);

echo "HexaDes : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b11111111);

echo "Underscore in number : ";
var_dump(1_000_000_000);

// float
echo "Floating Point : ";
var_dump(1.5);

echo "Floating Point with E notation plus : ";
var_dump(1.5e3); // 1.5 x 1000

echo "Floating Point with E notation minus :";
var_dump(7e-3); // 7 x 0.001

echo "Floating Point with underscore : ";
var_dump(1_234.589);

echo "Integer Overflow in 64bit : ";
var_dump(9223372036854775808);