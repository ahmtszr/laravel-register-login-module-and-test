## Register and Login Module - Unit Test
1) Öncelikle kullanıcı kayıt  sistemi için bir
   seneryomuzu oluşturuyoruz.


2) Seneryomuza göre kullanıcı register sayfasına erişebilecek ve ilgili validasyon
kurallarıyla register olabilecek.


3) Register olduktan sonra kullanıcı anasayfaya yönlenecek.


4) Eğer bir kullanıcı kayıt olmayıp login olmamışsa anasayfaya girdiğinde
"Kısıtlanmış verileri görmek için lütfen giriş yapın." yazısıyla karşılaşacaktır.
Hemen üst kısmında ise "Login", "Sign-up" butonlarını kullanarak giriş veya
kayıt yapabilecektir.


5) Kullanıcı register olup anasayfaya yönlendikten sonra
"Bu bölüme yalnızca kimliği doğrulanmış kullanıcılar erişebilir" yazısıyla karşılaşacaktır.


6) Doğrulanmış kullanıcı anasayfaya eriştikten sonra Logout olabilecek.


7) Kullanıcı logout olduğunda login sayfasına yönlenecektir.

## Routelerimizi oluşturduk

```sh
> Home (get)
> Register (get)
> Register (post)
> Login (get)
> Login (post)
> Logout (get)
   ```
## Kullandığımız kütüphaneler: Faker, RefreshDatabase, Bootstrap

- Faker ile birlikte modülümüz için fake veriler oluşturduk.
- RefreshDatabase kullanarak her testten sonra databasemizi sıfırladık ki
  veriler bir sonraki testlerimizle çakışmasın.
- Arayüzü geliştirmek için bootstrap kütüphanesinden yararlandık.

## Testlerimiz

- Kullanıcı register sayfasını ziyaret edebilecek.

- Kullanıcı null değerlerle register olamayak.

- Kullanıcı validasyon kurallarına uygunsuz şekilde register olamayacak.

- Kullanıcı geçerli değerlerle kayıt olabilecek.

- Register olduktan sonra anasayfaya yönlenecek.

- Login sayfasını ziyaret edebilecek.

- Logout olduktan sonra login sayfasına yönlenecek.






## Installation Steps

1 - Install composer

```sh
   composer install
   ```
2 - Install npm packages
```sh
   npm install
   ```
3 - Build npm
```sh
   npm run dev
   ```

4 - ENV configuration
> Create a new database and set config variables in .env file

5 - Link storage
```sh
   php artisan storage:link
   ```

6 - Migrations
There will be only a user in the database. 
```sh
   php artisan migrate
   ```
You can migrate all tables with dummy data
```sh
   php artisan migrate:fresh --seed
   ```

7 - Run application
```sh
   php artisan serve
   ```

8- Run queue
First set QUEUE_CONNECTION=database in .env file

```sh
   php artisan queue:work --timeout=120
   ```
    
