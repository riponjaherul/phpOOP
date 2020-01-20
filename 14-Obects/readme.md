## Object
**PHP Garbage Collection**
How PHP garbage collection works, since it was introduced in version 5.3. An object or variable in PHP memory will be removed by the PHP garbage collector when there are no references to that object in the symbols table. That is, PHP maintains a references counter of an object from the time it is created so that during the execution of the script PHP, the counter increments and decrements that reference counter based on the variables that are “pointing” to it. Once the reference count reaches 0 (i.e., nothing is referencing that object and, therefore, it is not being used), PHP marks that object as removable, so that in the next pass of the PHP garbage collector, it will be removed from memory, freeing that space for reuse.

***What are references in PHP?***
In PHP, references are “aliases” that allow two different variables to read and write a single value.
***How does PHP garbage collection work?***
PHP maintains a count of references towards an object from the time it is created. When there are no references to that object in the symbols table, the PHP garbage collector removes it.
***How are PHP memory references stored?***
PHP memory references are stored in a key-value store called the symbols table.
