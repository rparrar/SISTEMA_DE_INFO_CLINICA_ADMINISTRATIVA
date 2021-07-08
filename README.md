# Sistema de información Administrativa para funcionarios de Clinica (Servicios de Urgencia y Admisión)
Este Sistema, fue una idea que se me ocurrió para acortar los tiempos en mi ex trabajo, y fue escrito en mis tiempos libres, mediante el editor de archivos de cpanel, debido a no poder instalar mas aplicaciones en los pcs. de el lugar.

Está escrito en php, con ayuda del framework LARAVEL, con un poco de JS, CSS mediante Bootstrap, y un par de templates bajadas de internet.
Los cambios que le hacía, eran en "producción", porque era sólo para uso interno de algunos funcionarios, a quienes yo daba acceso.

## Construido con 🛠️
El sistema, fue escrito con las siguientes tecnologías:

* [PHP]
* [LARAVEL]
* [HTML]
* [CSS]
* [JS]
* [JQUERY]

## Descripción del Sistema 📄
En esencia, el sistema solamente es una colección de CRUDs, que permitía acceder a cierta información utilizada en el día a día, de unidades como urgencia, admisión, toma de muestras, imageonología, entre otros, y una parte de descarga de archivos.

La idea, era tener un accceso directo a varias partes, así como:

- **[Valores Imageonología](#)** Una tabla alimentada con datos mysql, ayudada con Datatables.net, muestra los valores de todas las prestaciones de imageonología.
- **[Valores Imageonología](#)** Una tabla alimentada con datos mysql, ayudada con Datatables.net, muestra los valores de todas las prestaciones de toma de muestras.
- **[Valores dia cama     ](#)** Una tabla alimentada con datos mysql, ayudada con Datatables.net, muestra los valores de los día cama para hospitalizados.
- **[Planes Cruz Blanca   ](#)** Una tabla alimentada con datos mysql, ayudada con Datatables.net, muestra los planes de cruz blanca, para saber si tenían convenio con esta Clínica.
- **[Bajar plan C. Blanca ](#)** Para poder descargar cualquier Plan, teniendo el código que se asigna a los planes, descarga un PDF.
- **[Códigos Integrales   ](#)** Una tabla alimentada con datos mysql, ayudada con Datatables.net, muestra los códigos fonasa, de las prestaciones "Urgencia Integral".
- **[Doctores             ](#)** Una tabla alimentada con datos mysql, ayudada con Datatables.net, muestra los datos de los distintos doctores. 
- **[Seguros              ](#)** Una tabla alimentada con datos mysql, ayudada con Datatables.net, da los accesos a descarga de los pdf con formularios de aseguradoras. 
- **[Anexos               ](#)** Una tabla alimentada con datos mysql, ayudada con Datatables.net, Los anexos del lugar, divididos en torre, piso y unidades. 
- **[Descargas            ](#)** Una tabla alimentada con datos mysql, ayudada con Datatables.net, para descargar los distintos documentos que se utilizaban en la operación diaria.
- **[Comunas              ](#)** Una tabla alimentada con datos mysql, ayudada con Datatables.net, la colección de comunas y ciudades de chile.
- **[Datos transferencias ](#)** Genera un pdf, para poder entregar a los clientes, cuando pedían los datos para transferir y pagar sus cuentas.
- **[Rotativa de urgencia ](#)** Una implementación de fullcalendar(https://fullcalendar.io/), para ir viendo las rotaciones y los turnos de los funcionarios.
- **[Cortes de horas Extra](#)** Una tabla alimentada con datos mysql, que indicaba los cortes de H.E., para calcular lo que iba a sacar mes a mes.
 
  

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
