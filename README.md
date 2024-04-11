# A Proof of Concept of Server-side Firebase Cloud Messaging Laravel Implementation

## Create a migration for fcm tokens

```bash
php artisan make:migration add_fcm_device_token_column_to_users_table --table=users
```

## Create a token column

```php
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('fcm_token')->nullable()->after('password'); //Add this column after password column
        });
    }
```

## Install Firebase SDK

```bash
composer require kreait/laravel-firebase
```

<!--
Use npm

Use a <script> tag
If you're already using NPM and a module bundler such as webpack or Rollup, you can run the following command to install the latest SDK (Learn more):

npm install firebase
Then, initialise Firebase and begin using the SDKs for the products that you'd like to use.

// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyDmVuVhZFVLxKpHAitIPDxx9f6t5Y69uXQ",
  authDomain: "fcm-laravel-next.firebaseapp.com",
  projectId: "fcm-laravel-next",
  storageBucket: "fcm-laravel-next.appspot.com",
  messagingSenderId: "291883322907",
  appId: "1:291883322907:web:d799a0bfef9cba1f4a72be",
  measurementId: "G-H8SQVBS032"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app); -->

```

```
