<?php

abstract class Animal
{

}

interface Mammal
{

}

interface Fish
{

}

interface Insect
{

}

interface Feline extends Mammal
{

}

interface Canine extends Mammal
{

}

class Dog extends Animal implements Canine
{

}

class Wolf extends Animal implements Canine
{

}

class Cat extends Animal implements Feline
{

}

class Cougar extends Animal implements Feline
{
	
}

class Lion extends Animal implements Feline
{
	
}

class Antilopa extends Animal implements Mammal
{

}

class Elephant extends Animal implements Mammal
{

}

class Shark extends Animal implements Fish
{

}

class Trout extends Animal implements Fish
{
	
}