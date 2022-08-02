<p align="center"><h1>BLANK PROJECT</h1></p>

<p align="center">
Created By : Mukti
</p>

## About Blank Project

Blank Project is empty project that already has Laravel Framework inside and also it has been integrated with Infyom Laravel Generator. So basically this project is kind of Boilerplate for you who want to clone or have Laravel + Infyom Project ready to use. This project is free to use, and if you need it, you can clone it and use it on your own purpose.

- [Built in Laravel](https://laravel.com/).
- [Infyom Laravel Generator added](https://infyom.com/open-source/laravelgenerator/docs/8.0/installation).
- [Admin LTE based Template](https://adminlte.io/).

Blank Project has provide so many basic function you need to build your Web Apps. All you need to do is clone this repository, setup the environment, and Whooossshhh... you ready to go.

## Setup Environment

- [Clone/Fork this Repository](https://github.com/personalmukti/blank.git).
- Open Terminal inside the project.
- Run composer update.
- Copy .env.example to .env
- Edit .env content such as :
    <ul>
        <li>APP_Name=Laravel to your Web App name. </li>
        <li>DB_CONNECTION=mysql to your database connection.</li>
        <li>DB_HOST=127.0.0.1 to your database host. </li>
        <li>DB_PORT=3306 to your database port.</li>
        <li>DB_DATABASE=laravel to your database name.</li>
        <li>DB_USERNAME=root to your database username.</li>
        <li>DB_PASSWORD= ************* to your database passwords.</li>
        <li>And more environment setup you can edit to suit your setting.</li>
    </ul>
- The last part is set your app key by running this command "php artisan key:generate"

That's it everything is ready!!!

If you need more information about Laravel you can visit Laravel Official website to get the documentation and find the information you need.

## Creating New CRUD Table

As I already said, this project have Infyom Laravel Generator installed, so if you want to create new CRUD table you just need to open "https://your-url/generator_builder" address on your browser.

It will simply open Infyom Generator Builder page, and then you just need to put your model name, choose command type, custom table name, set option, etc. After that you just need to specify any field you want for your table along with their datatype and component type that we need to used in input/edit form. Last step is click Generate Button and wait for the process to complete. Congratulation you are successfully creating your new CRUD table.

### Rollback Your Generated CRUD

If you already generate new CRUD mechanism and then you find something wrong with your apps and you want to remove the CRUD table you just create. All you have to do is open "https://your-url/generator_builder" again on your browser address. Scroll down until you find Rollback part on the Generator Page. Just type the Model name you want to rollback. 

*** Note : The model name you enter should match the model name you have created earlier.

After that just click the Rollback Button and wait the process completed.

## Future Upgrade

This version contain standard feature provided for blank project app. Our next upgrade will add more dynamic function of Web Application Standard Modules like multilevel account, dynamic websettings that can load website name, logo, favicon, description, and version info from database. The purpose is to provide setting you can use to change basic information on your website. So this frameworks can reused in your other project and just need a simple tweak.

## Using This Project

Using this soure code is free, but please do not remove credits from this source code to honor the contributors and keep track on file changes made by who.

## Security Vulnerabilities

This project not implement full security yet. It's already applied standard security developed under laravel environment. In our next upgrade hopefully we can add more secure mechanism on this project.

## License

The Blank Project using Open Source License, anyone can contribute on our development and get credits for that. [MIT license](https://opensource.org/licenses/MIT).

## Last Word

I'm really gratefull for anyone that already contribute on this project. 
Sincerely, Mukti.
