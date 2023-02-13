# Examples from "The art of Moder PHP 8" #
## With highlights ##

### Chapter 1
1. Keep all class properties and methods private by default.
2. Never define dynamic properties, all props should be defined in the class body.

### Chapter 2
1. Avoid as much as possible multiple levels of inheritance.
2. PHP don't allow multiple inheritance, like `MyClass extends ParentFoo, ParentBar` but this can be bypassed by implementing multiple `Interfaces`.
3. Mark classes as abstract to enforce that they must be inherited.
4. Mark class as final to enforce that they cannot be inherited.
5. **Splat** operator`...` , something like `args` in python
6. Static properties and constants can be overwritten by child class by can still be accessed using the self keyword.
7. Properties can be enforced in interfaces by specifying a getter for them 🤓

