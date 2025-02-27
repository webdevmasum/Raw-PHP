
PHP Null Safe Operator (?->)

PHP 8.0+ theke null safe operator (?->) introduce kora hoyeche. Eta null check korte help kore ar error throw na kore null return kore.

Ager PHP versions e null check manually korte hoto if statement ba isset() diye. Null Safe Operator use kore ei process ta shortcut hoyeche.
🔹 Syntax & Example

$variable?->method();

    Jodi $variable null na hoy, tahole method call hobe.
    Jodi $variable null hoy, tahole direct null return korbe (error dibe na).

1️⃣ Traditional Null Check (PHP 7 and Below)

    <?php
        class User {
            public function getName() {
                return "John Doe";
            }
        }

        $user = null;

        // PHP 7 er way (Manually check korte hoy)
        $name = isset($user) ? $user->getName() : null;

        echo $name; // Output: null (Kono error dibe na)
    ?>



2️⃣ PHP 8+ Null Safe Operator (?->)

    <?php
        class User {
            public function getName() {
                return "John Doe";
            }
        }

        $user = null;

        // PHP 8+ way (Shortcut)
        $name = $user?->getName();

        echo $name; // Output: null (Error dibe na)
    ?>




3️⃣ Example: Object Property Access


    <?php
        class Profile {
            public $email = "user@example.com";
        }

        class User {
            public ?Profile $profile = null;
        }

        $user = new User();

        // Traditional way (Error avoid korte if check lagbe)
        $email = isset($user->profile) ? $user->profile->email : null;
        echo $email; // Output: null

        // PHP 8+ way
        $email = $user->profile?->email;
        echo $email; // Output: null
    ?>



4️⃣ Example: Nested Null Check


    <?php
        class Address {
            public $city = "Dhaka";
        }

        class Profile {
            public ?Address $address = null;
        }

        class User {
            public ?Profile $profile = null;
        }

        $user = new User();

        // Traditional PHP 7 way
        $city = isset($user->profile) && isset($user->profile->address) ? $user->profile->address->city : null;
        echo $city; // Output: null

        // PHP 8+ way (Shortcut)
        $city = $user->profile?->address?->city;
        echo $city; // Output: null
    ?>



5️⃣ Example: Function Call with Null Safe Operator


    <?php
        class User {
            public function getProfile() {
                return null; // Suppose profile nai
            }
        }

        $user = new User();

        // PHP 8+ way
        $profile = $user?->getProfile()?->email;

        echo $profile; // Output: null (Error throw korbe na)
    ?>

