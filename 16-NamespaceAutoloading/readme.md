## Autoloading
**Different Between `Required` and `Include` in PHP?**
The difference between `include` and `require` arises when the file being included cannot be found: `include` will emit a warning (`E_WARNING`) and the script will continue, whereas `require` will emit a fatal error (`E_COMPILE_ERROR`) and halt the script. If the file being included is critical to the rest of the script running correctly then you need to use `require`.

**How to use autoload :**

 1. In root folder type `composer init` and enter after enter.
 2. Create a composer.json file
 3. In JSON file type, use "Library\\":"Library1/"
	 1. Namespace Library find all file of Library1 directory 
4. Then write `composer dump-autoload` and enter, all file of under directory automatically loaded in root file, not to declare manually `required_once`.

