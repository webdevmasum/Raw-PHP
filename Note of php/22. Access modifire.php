*************************

*************************

✅ Access Modifier er Types

    1️⃣ public → Je keu access korte parbe (anywhere theke access kora jabe)
    2️⃣ protected → Sudhumatro oi class ar tar child (inherited) class theke access kora jabe
    3️⃣ private → Sudhumatro oi class er vitorei access kora jabe, child class ba onno jayga theke kora jabe na

🔹 Example & Explanation

    <?php
        class User {
            public $name = "John"; // Public, so everywhere theke access kora jabe
            protected $email = "john@example.com"; // Protected, only class & child class access korte parbe
            private $password = "123456"; // Private, only ei class er vitore access kora jabe

            public function getEmail() {
                return $this->email; // Protected variable k class er vitore access kora jabe
            }

            private function getPassword() {
                return $this->password; // Private method only ei class er moddhei kaj korbe
            }
        }

        $user = new User();
        echo $user->name; // ✅ Public, so access kora jabe
        // echo $user->email; // ❌ Error, karon eta protected
        // echo $user->password; // ❌ Error, karon eta private
        echo $user->getEmail(); // ✅ Protected value class er vitore access hocche tai kaj korbe
    ?>


🔹 Access Modifier keno use kora hoy?

    1️⃣ Encapsulation ensure korte (Data ke secure rakhte)
    2️⃣ Code ke Maintainable & Organized korte
    3️⃣ Data Hide korte (Data Hiding)
    4️⃣ OOP Best Practices maintain korte
    5️⃣ Class er vitore logic properly manage korte


✅ Access Modifier er Kichu Important Use Case
🔸 public - Jokhon property/method ke globally access korte dite hobe


    <?php
        class User {
            public $username = "johndoe";
        }

        $user = new User();
        echo $user->username; // ✅ Access kora jabe
    ?>


🔸 protected - Jokhon child class ke access dite hobe, kintu class er baire theke na

    <?php
        class Person {
            protected $age = 25;
        }

        class Employee extends Person {
            public function getAge() {
                return $this->age; // ✅ Access kora jabe karon eta child class er vitore ache
            }
        }

        $emp = new Employee();
        echo $emp->getAge(); // ✅ Works fine
        // echo $emp->age; // ❌ Error, karon eta directly class er baire theke access kora jabe na

    ?>



✅ private - Jokhon sudhu class er vitorei access dite hobe, child class ba baire theke na


    <?php
        class BankAccount {
            private $balance = 5000;

            public function getBalance() {
                return $this->balance; // ✅ Private property class er vitore access kora jabe
            }
        }

        $account = new BankAccount();
        echo $account->getBalance(); // ✅ Works fine
        // echo $account->balance; // ❌ Error, karon eta private
    ?>





