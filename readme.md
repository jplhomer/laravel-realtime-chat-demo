# Realtime Chat Demo with Laravel 5.4, VueJS, and Pusher

[Check out the article here](https://jplhomer.org/2017/01/building-realtime-chat-app-laravel-5-4-vuejs/).

## Development

1. Clone or fork this repository
1. Run `composer install`
1. Run `php artisan key:generate`
1. Fill out relevant items in your `.env` file, including:

    DB_CONNECTION
    PUSHER_APP_ID
    PUSHER_KEY
    PUSHER_SECRET

1. Run `npm i`
1. Build assets with `npm run dev`
1. Use `php artisan serve` or another method to view the app in the browser

## Important Notes

- You will need to set your environment variables in the `.env` file! Don't forget to change the broadcasting settings to Pusher, for example.
- Depending on your geographical location, you will need to set a cluster variable for Pusher. [See Laravel Docs for more information](https://laravel.com/docs/5.4/broadcasting#driver-prerequisites)
- I don't have time to provide help/support since this is a free project, but I encourage you to watch the videos and make sure you've followed all the steps.
