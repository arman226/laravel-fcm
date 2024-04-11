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

## Create A Controller to Handle Push Notifications

```bash
php artisan make:controller FirebasePushController
```

### inside the <i>Firebase Push Controller</i> use the Firebase Facade to access the <i>Messaging</i> method

```php
    public function __construct()
    {
        $this->notification= Firebase::messaging();
    }
```

### Create a function that saves a token

```php
  public function setToken(Request $request){
       $token = $request->input("fcm_token");
       $request->user()->update(['fcm_token'=> $token]);
       return response()->json(['message'=>'Successfully Updated Token']);
   }
```

## Inside the <i>api.php</i>, create an endpoit that will cater the token setter

```php
Route::post('setToken', [FirebasePushController::class, 'setToken'])->name('firebase.token');
```
