## Dependency Injection
*** **Dependency Injection** is creating relationship between two or more classes.

**Tight Coupling Dependency Injection :**

 1. All Child class Inject in parent class, So all Change in Parent Class
 2. If Anyone add `New Class` in `Course Class` then add object in `Course=>_construct()` method.

**Loosely Coupling Dependency Injection :**

 1. All `Parent class` Inject in `Child class`, So no need to Change in Parent Class, just change in Child Class
