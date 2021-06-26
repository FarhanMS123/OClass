# OCLASS

This README is describing project and how-to use the project. For Laravel License, please (see this file)[./laravel.README.md]

## Debugging

### Testing Blade View

`/debug/view/{view-name}`

This route would help frontend developper in checking their HTML in blade file without counfusing their self with the backend code. To using it, add the HTML file in `resources/views` and change the extension with `view_name.blade.php`. After that, access `/debug/view/{view-name}`. Change `{view-name}` width the blade file name.

For example, there is a file `resources/views/welcome.blade.php`. Try to access it with `/debug/view/welcome`.

If the file is in the another directory, you could access them by add '.' instead '/'. For example, there is a file `resources/views/auth/password/reset.blade.php`. Try to access it by `/debug/view/auth.password.reset`.
