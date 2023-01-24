# Laravel Onesignal Package

Laravel offers a package called "Laravel Notifications" which allows for the sending of notifications to mobile applications. The package allows for the ability to send push notifications to both iOS and Android devices, as well as sending SMS messages and sending notifications via email. The package also includes support for sending notifications to different channels, such as Firebase Cloud Messaging or OneSignal, and it also includes built-in support for creating custom notification channels. Additionally, it provides an easy to use API for sending notifications to specific users or groups of users.

### Use
Welcome to our package! We are excited to have you on board.
Before you get started, we wanted to let you know that 
our package requires two environment variables to be set in your .env file. 
These variables are :
  - __APP_API_KEY__ and 
  - __APP_ID__. 
Without these values set, the package will not work properly.

__APP_API_KEY__ it is you onesignal app api key used for authentication and authorization to access onesignal API. 
Please make sure to provide a valid API key.
__APP_ID__ is used to identify your application and to provide you the correct data.

To set these variables, please open your .env file and add following lines:
- APP_API_KEY=your_api_key
- APP_ID=your_app_id
