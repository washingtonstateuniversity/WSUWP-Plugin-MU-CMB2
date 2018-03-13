# WSUWP MU CMB2

An MU plugin installed on the [WSUWP Platform](https://github.com/washingtonstateuniversity/wsuwp-platform) to make shared use of [CMB2](https://github.com/CMB2/CMB2) easy.

To use CMB2 in your plugin or theme on WSUWP:

```php
// Load WSUWP's implementation of CMB2.
if ( function_exists( 'WSUWP\CMB2\init' ) ) {
    WSUWP\CMB2\init();
}
```
