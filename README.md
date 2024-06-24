## MARGILANFUND
<a href="https://margilanfund.org/">Production URL</a>

# Admin - CRUD
Country, City, Cemetery, Sector, People, Settings



# Logic:
Admin can disable/enable payment for people Candle. If disabled, payment_id in candle table will be static 1.
Stripe ONE TIME PAYMENT API
RTL for hebrew (video in docs, js)
No guest login.
Guest can overrite amount.


# Database table:

Settings:
name, logo, description, stripe_token

Country:
name, slug, status(boolean, default: true)

City:
country_id, name, slug, status(boolean, default: true)

Cemetery:
country_id, name, slug, status(boolean, default: true)

Candle:
people_id, payment_id, message

Payment:
candle_id, transaction, amount, status(boolean, default: false)

Sectors:
name, slug, status(default: true)


People:
first_name, last_name, row(nullable), birth_date, death_date, gender, avatar, cemetry_id, country_id, city_id, payment(boolean, default: true), status(boolean, default: true)


# System Requirements
This will be a laravel 10 application. database schema are given above. 
in migration files must have: status fields will be boolean and default true.
in model files must have:
    * cast status fields boolean
    * add $table, $fillable
    * ORM relations properly
    * generate slug from name fields

