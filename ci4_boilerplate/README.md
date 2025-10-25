# ci4_boilerplate

This is a starter boilerplate for CodeIgniter 4 projects.

## Grocery CRUD Setup

Due to limitations in the environment, the Grocery CRUD package could not be installed automatically. To complete the setup, please follow these steps:

1.  **Install Grocery CRUD:**
    ```bash
    composer require grocery-crud/enterprise
    ```

2.  **Copy Assets:**
    Copy the assets from `vendor/grocery-crud/enterprise/public` to your `public/assets` directory.
    ```bash
    cp -r vendor/grocery-crud/enterprise/public/* public/assets/
    ```

3.  **Uncomment Code:**
    Uncomment the code in `app/Controllers/Admin/Users.php` to enable the Grocery CRUD functionality.
